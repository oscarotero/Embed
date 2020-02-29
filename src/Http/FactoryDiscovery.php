<?php
declare(strict_types = 1);

namespace Embed\Http;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RuntimeException;

abstract class FactoryDiscovery
{
    private const REQUEST = [
        'Laminas\Diactoros\RequestFactory',
        'GuzzleHttp\Psr7\HttpFactory',
        'Slim\Psr7\Factory\RequestFactory',
        'Nyholm\Psr7\Factory\Psr17Factory',
        'Sunrise\Http\Message\RequestFactory',
    ];

    private const RESPONSE = [
        'Laminas\Diactoros\ResponseFactory',
        'GuzzleHttp\Psr7\HttpFactory',
        'Slim\Psr7\Factory\ResponseFactory',
        'Nyholm\Psr7\Factory\Psr17Factory',
        'Sunrise\Http\Message\ResponseFactory',
    ];

    private const URI = [
        'Laminas\Diactoros\UriFactory',
        'GuzzleHttp\Psr7\HttpFactory',
        'Slim\Psr7\Factory\UriFactory',
        'Nyholm\Psr7\Factory\Psr17Factory',
        'Sunrise\Http\Message\UriFactory',
    ];

    public static function getRequestFactory(): RequestFactoryInterface
    {
        if ($class = self::searchClass(self::REQUEST)) {
            return new $class();
        }

        throw new RuntimeException('No RequestFactoryInterface detected');
    }

    public static function getResponseFactory(): ResponseFactoryInterface
    {
        if ($class = self::searchClass(self::RESPONSE)) {
            return new $class();
        }

        throw new RuntimeException('No ResponseFactoryInterface detected');
    }

    public static function getUriFactory(): UriFactoryInterface
    {
        if ($class = self::searchClass(self::URI)) {
            return new $class();
        }
    }

    private static function searchClass($classes): ?string
    {
        foreach ($classes as $class) {
            if (class_exists($class)) {
                return $class;
            }
        }

        return null;
    }
}
