<?php

namespace Embed;

use DOMDocument;
use DOMElement;
use DOMNodeList;
use DOMXPath;

/**
 * Some helpers methods used across the library.
 */
class Utils
{
    private static $encodings = [
        'ASCII'        => 'ascii',
        'UTF-8'        => 'utf-8',
        'SJIS'         => 'shift_jis',
        'Windows-1251' => 'windows-1251',
        'Windows-1252' => 'windows-1252',
        'Windows-1254' => 'windows-1254',
        'ISO-8859-1'   => 'iso-8859-1',
        'ISO-8859-2'   => 'iso-8859-2',
        'ISO-8859-3'   => 'iso-8859-3',
        'ISO-8859-4'   => 'iso-8859-4',
        'ISO-8859-5'   => 'iso-8859-5',
        'ISO-8859-6'   => 'iso-8859-6',
        'ISO-8859-7'   => 'iso-8859-7',
        'ISO-8859-8'   => 'iso-8859-8',
        'ISO-8859-9'   => 'iso-8859-9',
        'ISO-8859-10'  => 'iso-8859-10',
        'ISO-8859-13'  => 'iso-8859-13',
        'ISO-8859-14'  => 'iso-8859-14',
        'ISO-8859-15'  => 'iso-8859-15',
        'ISO-8859-16'  => 'iso-8859-16',
    ];

    /**
     * Creates a <video> element.
     *
     * @param string       $poster  Poster attribute
     * @param string|array $sources Video sources
     * @param int          $width   Width attribute
     * @param int          $height  Height attribute
     *
     * @return string
     */
    public static function videoHtml($poster, $sources, $width = 0, $height = 0)
    {
        $code = self::element('video', [
            'poster' => ($poster ?: null),
            'width' => ($width ?: null),
            'height' => ($height ?: null),
            'controls' => true,
        ]);

        foreach ((array) $sources as $source) {
            $code .= self::element('source', ['src' => $source]);
        }

        return $code.'</video>';
    }

    /**
     * Creates an <audio> element.
     *
     * @param string|array $sources Audio sources
     *
     * @return string
     */
    public static function audioHtml($sources)
    {
        $code = '<audio controls>';

        foreach ((array) $sources as $source) {
            $code .= self::element('source', ['src' => $source]);
        }

        return $code.'</audio>';
    }

    /**
     * Creates an <img> element.
     *
     * @param string $src    Image source attribute
     * @param string $alt    Alt attribute
     * @param int    $width  Width attribute
     * @param int    $height Height attribute
     *
     * @return string
     */
    public static function imageHtml($src, $alt = '', $width = 0, $height = 0)
    {
        return self::element('img', [
            'src' => $src,
            'alt' => $alt,
            'width' => ($width ?: null),
            'height' => ($height ?: null),
        ]);
    }

    /**
     * Creates an <iframe> element.
     *
     * @param string $src    Iframe source attribute
     * @param int    $width  Width attribute
     * @param int    $height Height attribute
     * @param int    $styles Extra css styles
     *
     * @return string
     */
    public static function iframe($src, $width = 0, $height = 0, $styles = '')
    {
        $width = $width ? (is_int($width) ? $width.'px' : $width) : '600px';
        $height = $height ? (is_int($height) ? $height.'px' : $height) : '400px';

        if (empty($styles)) {
            $styles = 'border:none;overflow:hidden;';
        }

        $styles .= "width:{$width};height:{$height};";

        return self::element('iframe', [
            'src' => $src,
            'frameborder' => 0,
            'allowTransparency' => 'true',
            'style' => $styles,
        ]).'</iframe>';
    }

    /**
     * Creates an <script> element.
     *
     * @param string $src The src attribute
     *
     * @return string
     */
    public static function script($src)
    {
        return self::element('script', [
            'src' => $src,
        ]).'</script>';
    }

    /**
     * Creates an <iframe> element with a google viewer.
     *
     * @param string $src The file loaded by the viewer (pdf, doc, etc)
     *
     * @return string
     */
    public static function google($src)
    {
        return self::iframe('https://docs.google.com/viewer?'.http_build_query([
            'url' => $src,
            'embedded' => 'true',
        ]), 600, 600);
    }

    /**
     * Creates a flash element.
     *
     * @param string   $src    The swf file source
     * @param null|int $width  Width attribute
     * @param null|int $height Height attribute
     *
     * @return string
     */
    public static function flash($src, $width = null, $height = null)
    {
        $code = self::element('object', [
            'width' => $width ?: 600,
            'height' => $height ?: 400,
            'classid' => 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000',
            'codebase' => 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0',
        ]);

        $code .= self::element('param', ['name' => 'movie', 'value' => $src]);
        $code .= self::element('param', ['name' => 'allowFullScreen', 'value' => 'true']);
        $code .= self::element('param', ['name' => 'allowScriptAccess', 'value' => 'always']);
        $code .= self::element('embed', [
            'src' => $src,
            'width' => $width ?: 600,
            'height' => $height ?: 400,
            'type' => 'application/x-shockwave-flash',
            'allowFullScreen' => 'true',
            'allowScriptAccess' => 'always',
            'pluginspage' => 'http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash',
        ]);

        return $code.'</embed></object>';
    }

    /**
     * Creates an html element.
     *
     * @param string $name  Element name
     * @param array  $attrs Element attributes
     *
     * @return string
     */
    private static function element($name, array $attrs)
    {
        $str = "<$name";

        foreach ($attrs as $name => $value) {
            if ($value === null) {
                continue;
            } elseif ($value === true) {
                $str .= " $name";
            } elseif ($value !== false) {
                $str .= ' '.$name.'="'.htmlspecialchars($value).'"';
            }
        }

        return "$str>";
    }

    /**
     * Convert a string to utf-8.
     *
     * @param string $content The content to convert
     * @param string $charset The original charset
     *
     * @return string
     */
    public static function toUtf8($content, $charset)
    {
        $charset = strtoupper($charset);

        if (empty($charset) || $charset === 'UTF-8') {
            return $content;
        }

        $encodings = array_map('strtoupper', mb_list_encodings());

        if (in_array($charset, $encodings, true)) {
            return mb_convert_encoding($content, 'UTF-8', $charset);
        }

        if (function_exists('iconv')) {
            return iconv($charset, 'UTF-8//TRANSLIT//IGNORE', $content);
        }

        return $content;
    }

    /**
     * Search and return the first element matching with a xpath
     *
     * @param DOMDocument $document
     * @param string      $query
     * @param bool        $returnFirst
     *
     * @return DOMElement|DOMNodeList|null
     */
    public static function xpathQuery(DOMDocument $document, $query, $returnFirst = true)
    {
        $xpath = new DOMXPath($document);
        $entries = $xpath->query($query);

        if ($entries->length) {
            return $returnFirst ? $entries->item(0) : $entries;
        }
    }

    /**
     * Parse a string as html code
     *
     * @param string $html
     *
     * @return DOMDocument
     */
    public static function parse($html)
    {
        $errors = libxml_use_internal_errors(true);

        // PHP 8 deprecates libxml_disable_entity_loader() as it is no longer needed
        if (\PHP_VERSION_ID < 80000) {
            $entities = libxml_disable_entity_loader(true);
        }

        $html = trim(self::normalize($html));

        $document = new DOMDocument();
        $document->loadHTML($html);

        libxml_use_internal_errors($errors);

        if (\PHP_VERSION_ID < 80000) {
            libxml_disable_entity_loader($entities);
        }

        return $document;
    }

    /**
     * Normalize the encoding of a html code before parse
     * 
     * @param string $string
     * 
     * @return string
     */
    private static function normalize($string)
    {
        $detected = mb_detect_encoding($string, implode(',', array_keys(self::$encodings)), true);
        
        if ($detected && isset(self::$encodings[$detected])) {
            $string = mb_convert_encoding($string, 'HTML-ENTITIES', $detected);
            $string = preg_replace(
                '/<head[^>]*>/',
                '<head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset='.self::$encodings[$detected].'">',
                $string
            );
        }

        return $string;
    }
}
