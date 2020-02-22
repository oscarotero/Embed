<?php
declare(strict_types = 1);

namespace Embed\Http;

use Composer\CaBundle\CaBundle;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class to fetch html pages
 */
final class CurlDispatcher
{
    private RequestInterface $request;
    private $curl;
    private array $headers = [];
    private bool $multi = false;
    private ?int $error = null;

    /**
     * @return ResponseInterface[]
     */
    public static function fetch(?ResponseFactoryInterface $responseFactory, RequestInterface ...$requests): array
    {
        $responseFactory = $responseFactory ?: FactoryDiscovery::getResponseFactory();

        if (count($requests) === 1) {
            $connection = new static($requests[0]);
            return [$connection($responseFactory)];
        }

        //Init connections
        $multi = curl_multi_init();
        $connections = [];

        foreach ($requests as $request) {
            $connection = new static($request);
            $connection->multi = true;
            curl_multi_add_handle($multi, $connection->curl);

            $connections[] = $connection;
        }

        //Run
        $active = null;
        do {
            $status = curl_multi_exec($multi, $active);

            if ($active) {
                curl_multi_select($multi);
            }

            $info = curl_multi_info_read($multi);

            if ($info) {
                foreach ($connections as $connection) {
                    if ($connection->curl === $info['handle']) {
                        $connection->result = $info['result'];
                        break;
                    }
                }
            }
        } while ($active && $status == CURLM_OK);

        //Close connections
        foreach ($connections as $connection) {
            curl_multi_remove_handle($multi, $connection->curl);
        }

        curl_multi_close($multi);

        return array_map(
            fn ($connection) => $connection($responseFactory),
            $connections
        );
    }

    private function __construct(RequestInterface $request)
    {
        $this->request = $request;
        $this->curl = curl_init((string) $request->getUri());

        $cookies = str_replace('//', '/', sys_get_temp_dir().'/embed-cookies.txt');

        curl_setopt_array($this->curl, [
            CURLOPT_HTTPHEADER => $this->getRequestHeaders(),
            CURLOPT_POST => strtoupper($request->getMethod()) === 'POST',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => '',
            CURLOPT_CAINFO => CaBundle::getSystemCaRootBundlePath(),
            CURLOPT_AUTOREFERER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
            CURLOPT_USERAGENT => $request->getHeaderLine('User-Agent'),
            CURLOPT_COOKIEJAR => $cookies,
            CURLOPT_COOKIEFILE => $cookies,
        ]);

        curl_setopt(
            $this->curl,
            CURLOPT_HEADERFUNCTION,
            function ($resource, $string) {
                if (!strpos($string, ':')) {
                    return strlen($string);
                }

                list($name, $value) = array_map('trim', explode(':', $string, 2));

                $name = strtolower($name);

                $this->headers[$name] ??= [];
                $this->headers[$name][] = $value;

                return strlen($string);
            }
        );
    }

    public function __invoke(ResponseFactoryInterface $responseFactory): ResponseInterface
    {
        if ($this->multi) {
            $body = curl_multi_getcontent($this->curl);
        } else {
            $body = curl_exec($this->curl);
        }

        $info = curl_getinfo($this->curl);

        if ($this->error) {
            $this->error(curl_strerror($this->error), $this->error);
        }

        if (curl_errno($this->curl)) {
            $this->error(curl_error($this->curl), curl_errno($this->curl));
        }

        curl_close($this->curl);

        $response = $responseFactory->createResponse($info['http_code']);

        foreach ($this->headers as $name => $values) {
            $response = $response->withHeader($name, $values);
        }

        if (!$response->hasHeader('Content-Location')) {
            $response = $response->withHeader('Content-Location', $info['url']);
        }

        $response->getBody()->write($body);

        return $response;
    }

    private function error(string $message, int $code)
    {
        throw new NetworkException($message, $code, $this->request);
    }

    private function getRequestHeaders(): array
    {
        $headers = [];

        foreach ($this->request->getHeaders() as $name => $values) {
            switch (strtolower($name)) {
                case 'user-agent':
                break;
                default:
                $headers[$name] = implode(', ', $values);
            }
        }

        return $headers;
    }
}
