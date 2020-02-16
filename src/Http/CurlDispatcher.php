<?php
declare(strict_types = 1);

namespace Embed\Http;

use Composer\CaBundle\CaBundle;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class to fetch html pages
 */
final class CurlDispatcher implements ClientInterface
{
    private ResponseFactoryInterface $responseFactory;

    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $url = (string) $request->getUri();
        $curl = curl_init($url);

        $cookies = str_replace('//', '/', sys_get_temp_dir().'/embed-cookies.txt');

        curl_setopt_array($curl, [
            CURLOPT_HTTPHEADER => self::getHeaders($request),
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
            CURLOPT_COOKIEJAR => $cookies,
            CURLOPT_COOKIEFILE => $cookies,
        ]);

        $headers = [];

        curl_setopt(
            $curl,
            CURLOPT_HEADERFUNCTION,
            function ($resource, $string) use ($headers) {
                if (!strpos($string, ':')) {
                    return strlen($string);
                }

                list($name, $value) = array_map('trim', explode(':', $string, 2));

                $name = strtolower($name);

                $headers[$name] ??= [];
                $headers[$name][] = $value;

                return strlen($string);
            }
        );

        $body = curl_exec($curl);
        $info = curl_getinfo($curl);

        if (curl_errno($curl)) {
            throw new NetworkException(curl_error($curl), curl_errno($curl), $request);
        }

        curl_close($curl);

        return $this->createResponse($headers, $body, $info);
    }

    private static function getHeaders(RequestInterface $request): array
    {
        $headers = [];

        foreach ($request->getHeaders() as $name => $values) {
            $headers[$name] = implode(', ', $values);
        }

        return $headers;
    }

    private function createResponse(array $headers, ?string $body, array $info): ResponseInterface
    {
        $response = $this->responseFactory->createResponse($info['http_code']);

        foreach ($headers as $name => $values) {
            $response = $response->withHeader($name, $values);
        }

        if (!$response->hasHeader('Content-Location')) {
            $response = $response->withHeader('Content-Location', $info['url']);
        }

        $response->getBody()->write($body);

        return $response;
    }
}
