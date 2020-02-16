<?php

namespace Embed;

function clean(string $value): ?string
{
    $value = trim($value);

    //Ignore empty texts or with no regular characters
    if ($value === '' || !preg_match('/\w/', $value)) {
        return null;
    }

    $value = html_entity_decode($value);
    $value = strip_tags($value);

    return trim(preg_replace('/\s+/u', ' ', $value));
}

function cropText(?string $text, int $maxLength = 400, int $offset = 0): ?string
{
    if (empty($text)) {
        return null;
    }

    $text = mb_substr($text, $offset, $maxLength);

    if (mb_strlen($text) < $maxLength) {
        return $text;
    }

    $end = mb_strrpos($text, ' ');

    return mb_substr($text, 0, $end).'...';
}
