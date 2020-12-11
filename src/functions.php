<?php
declare(strict_types = 1);

namespace Embed;

use Psr\Http\Message\UriInterface;

function clean(string $value, bool $allowHTML = false): ?string
{
    $value = trim($value);

    if (!$allowHTML) {
        $value = html_entity_decode($value);
        $value = strip_tags($value);
    }

    $value = trim(preg_replace('/\s+/u', ' ', $value));
    return $value === '' ? null : $value;
}

function html(string $tagName, array $attributes, string $content = null): string
{
    $html = "<{$tagName}";

    foreach ($attributes as $name => $value) {
        if ($value === null) {
            continue;
        } elseif ($value === true) {
            $html .= " $name";
        } elseif ($value !== false) {
            $html .= ' '.$name.'="'.htmlspecialchars((string) $value).'"';
        }
    }

    if ($tagName === 'img') {
        return "${html} />";
    }

    return "{$html}>{$content}</{$tagName}>";
}

/**
 * Resolve a uri within this document
 * (useful to get absolute uris from relative)
 */
function resolveUri(UriInterface $base, UriInterface $uri): UriInterface
{
    $uri = $uri->withPath(resolvePath($base->getPath(), $uri->getPath()));

    if (!$uri->getHost()) {
        $uri = $uri->withHost($base->getHost());
    }

    if (!$uri->getScheme()) {
        $uri = $uri->withScheme($base->getScheme());
    }

    return $uri
        ->withPath(cleanPath($uri->getPath()))
        ->withFragment('');
}

function isHttp(string $uri): bool
{
    if (preg_match('/^(\w+):/', $uri, $matches)) {
        return in_array(strtolower($matches[1]), ['http', 'https']);
    }

    return true;
}

function resolvePath(string $base, string $path): string
{
    if ($path === '') {
        return '';
    }

    if ($path[0] === '/') {
        return $path;
    }

    if (substr($base, -1) !== '/') {
        $position = strrpos($base, '/');
        $base = substr($base, 0, $position);
    }

    $path = "{$base}/{$path}";

    $parts = array_filter(explode('/', $path), 'strlen');
    $absolutes = [];

    foreach ($parts as $part) {
        if ('.' == $part) {
            continue;
        }

        if ('..' == $part) {
            array_pop($absolutes);
            continue;
        }

        $absolutes[] = $part;
    }

    return implode('/', $absolutes);
}

function cleanPath(string $path): string
{
    if ($path === '') {
        return '/';
    }

    $path = preg_replace('|[/]{2,}|', '/', $path);

    if (strpos($path, ';jsessionid=') !== false) {
        $path = preg_replace('/^(.*)(;jsessionid=.*)$/i', '$1', $path);
    }

    return $path;
}

function matchPath(string $pattern, string $subject): bool
{
    $pattern = str_replace('\\*', '.*', preg_quote($pattern, '|'));

    return (bool) preg_match("|^{$pattern}$|i", $subject);
}

function getDirectory(string $path, int $position): ?string
{
    $dirs = explode('/', $path);
    return $dirs[$position + 1] ?? null;
}
