<?php
namespace Embed;

/**
 * Some helpers methods used across the library
 */
class Utils
{
    /**
     * Extract all meta elements from html
     *
     * @param \DOMDocument $html
     *
     * @return array with subarrays [name, value, element]
     */
    public static function getMetas(\DOMDocument $html)
    {
        $metas = [];

        foreach ($html->getElementsByTagName('meta') as $meta) {
            $name = trim(strtolower($meta->getAttribute('property') ?: $meta->getAttribute('name')));
            $value = $meta->getAttribute('content') ?: $meta->getAttribute('value');

            $metas[] = [$name, $value, $meta];
        }

        return $metas;
    }

    /**
     * Extract all link elements from html
     *
     * @param \DOMDocument $html
     *
     * @return array with subarrays [rel, href, element]
     */
    public static function getLinks(\DOMDocument $html)
    {
        $links = [];

        foreach ($html->getElementsByTagName('link') as $link) {
            if ($link->hasAttribute('rel') && $link->hasAttribute('href')) {
                $rel = trim(strtolower($link->getAttribute('rel')));
                $href = $link->getAttribute('href');

                $links[] = [$rel, $href, $link];
            }
        }

        return $links;
    }

    /**
     * Returns the bigger image
     *
     * @param array $images
     *
     * @return null|string
     */
    public static function getBiggerImage(array $images)
    {
        $biggerArea = 0;
        $biggerSrc = null;

        foreach ($images as $src => $image) {
            $area = $image[0] * $image[1];

            if ($area > $biggerArea) {
                $biggerArea = $area;
                $biggerSrc = $src;
            }
        }

        return $biggerSrc;
    }

    /**
     * Search and returns data from the providers
     *
     * @param null|array $providers   The providers used to retrieve the data
     * @param string     $name        The data name (title, description, image, etc)
     * @param boolean    $returnFirst If it's true, returns the first value found, else returns the most popular value
     *
     * @return mixed
     */
    public static function getData(array $providers, $name, $returnFirst = true)
    {
        $method = 'get'.$name;
        $values = [];
        $current = null;

        foreach ($providers as $provider) {
            if (($value = $provider->$method())) {
                if ($returnFirst === true) {
                    return $value;
                }

                if (isset($values[$value])) {
                    ++$values[$value];
                } else {
                    $values[$value] = 1;
                }

                if ($current === null || $values[$current] > $values[$value]) {
                    $current = $value;
                }
            }
        }

        return $current;
    }

    /**
     * Creates a <video> element
     *
     * @param string       $poster  Poster attribute
     * @param string|array $sources Video sources
     * @param integer      $width   Width attribute
     * @param integer      $height  Height attribute
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
     * Creates an <audio> element
     *
     * @param string|array $sources Audio sources
     *
     * @return string
     */
    public static function audioHtml($sources)
    {
        $code = "<audio controls>";

        foreach ((array) $sources as $source) {
            $code .= self::element('source', ['src' => $source]);
        }

        return $code.'</audio>';
    }

    /**
     * Creates an <img> element
     *
     * @param string  $src    Image source attribute
     * @param string  $alt    Alt attribute
     * @param integer $width  Width attribute
     * @param integer $height Height attribute
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
     * Creates an <iframe> element
     *
     * @param string  $src          Iframe source attribute
     * @param integer $width        Width attribute
     * @param integer $height       Height attribute
     * @param integer $extra_styles Extra css styles
     *
     * @return string
     */
    public static function iframe($src, $width = 0, $height = 0, $extra_styles = '')
    {
        $width = $width ? (is_int($width) ? $width.'px' : $width) : '600px';
        $height = $height ? (is_int($height) ? $height.'px' : $height) : '400px';

        return self::element('iframe', [
            'src' => $src,
            'frameborder' => 0,
            'allowTransparency' => 'true',
            'style' => "border:none;overflow:hidden;width:$width;height:$height;$extra_styles",
        ]).'</iframe>';
    }

    /**
     * Creates an <iframe> element with a google viewer
     *
     * @param string $src The file loaded by the viewer (pdf, doc, etc)
     *
     * @return string
     */
    public static function google($src)
    {
        return self::iframe('http://docs.google.com/viewer?'.http_build_query([
            'url' => $src,
            'embedded' => 'true',
        ]), 600, 600);
    }

    /**
     * Creates a flash element
     *
     * @param string       $src    The swf file source
     * @param null|integer $width  Width attribute
     * @param null|integer $height Height attribute
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
     * Creates an html element
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
}
