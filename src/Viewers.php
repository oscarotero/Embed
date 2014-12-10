<?php
/**
 * Some helpers to generate code for the viewers
 */
namespace Embed;

class Viewers
{
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
        $code = self::element('video', array(
            'poster' => ($poster ?: null),
            'width' => ($width ?: null),
            'height' => ($height ?: null),
            'controls' => true,
        ));

        foreach ((array) $sources as $source) {
            $code .= self::element('source', array('src' => $source));
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
            $code .= self::element('source', array('src' => $source));
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
        return self::element('img', array(
            'src' => $src,
            'alt' => $alt,
            'width' => ($width ?: null),
            'height' => ($height ?: null),
        ));
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

        return self::element('iframe', array(
            'src' => $src,
            'frameborder' => 0,
            'allowTransparency' => 'true',
            'style' => "border:none;overflow:hidden;width:$width;height:$height;$extra_styles",
        )).'</iframe>';
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
        return self::iframe('http://docs.google.com/viewer?'.http_build_query(array(
            'url' => $src,
            'embedded' => 'true',
        )), 600, 600);
    }

    /**
     * Creates a flash element
     *
     * @param string  $src    The swf file source
     * @param integer $width  Width attribute
     * @param integer $height Height attribute
     *
     * @return string
     */
    public static function flash($src, $width = 0, $height = 0)
    {
        $code = self::element('object', array(
            'width' => $width ?: 600,
            'height' => $height ?: 400,
            'classid' => 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000',
            'codebase' => 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0',
        ));

        $code .= self::element('param', array('name' => 'movie', 'value' => $src));
        $code .= self::element('param', array('name' => 'allowFullScreen', 'value' => 'true'));
        $code .= self::element('param', array('name' => 'allowScriptAccess', 'value' => 'always'));
        $code .= self::element('embed', array(
            'src' => $src,
            'width' => $width ?: 600,
            'height' => $height ?: 400,
            'type' => 'application/x-shockwave-flash',
            'allowFullScreen' => 'true',
            'allowScriptAccess' => 'always',
            'pluginspage' => 'http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash',
        ));

        return $code.'</embed></object>';
    }
}
