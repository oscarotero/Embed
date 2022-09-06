<?php
declare(strict_types = 1);

require dirname(__DIR__).'/vendor/autoload.php';

use Brick\VarExporter\VarExporter;

//Fetch endpoint from https://oembed.com
$providers = json_decode(file_get_contents('https://oembed.com/providers.json'));
$endpoints = [];

foreach ($providers as $provider) {
    $name = $provider->provider_name;
    $url = $provider->provider_url;

    foreach ($provider->endpoints as $endpoint) {
        saveEndpoint($endpoint->url, $endpoint->schemes ?? ["$url*"]);
    }
}

//Export the endpoints
file_put_contents(
    dirname(__DIR__).'/src/resources/oembed.php',
    sprintf("<?php\ndeclare(strict_types = 1);\n\nreturn %s;\n", VarExporter::export($endpoints, VarExporter::TRAILING_COMMA_IN_ARRAY))
);

echo 'Endpoints saved'.PHP_EOL;

function saveEndpoint(string $url, array $schemes): void
{
    global $endpoints;

    $url = str_replace('{format}', 'json', $url);

    if (!isset($endpoints[$url])) {
        $endpoints[$url] = [];
    }

    foreach ($schemes as $scheme) {
        $pattern = getPattern($scheme);

        if (!in_array($pattern, $endpoints[$url])) {
            $endpoints[$url][] = $pattern;
        }
    }
}

function getPattern(string $pattern): string
{
    $pattern = str_replace(['http://', 'https://'], '', $pattern);
    $pattern = str_replace('\\*', '.*', preg_quote($pattern, '|'));

    return "|^https?://{$pattern}$|i";
}
