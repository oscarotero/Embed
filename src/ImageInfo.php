<?php
namespace Embed;

/**
 * Class to retrieve the size and mimetype of images using curl
 */
class ImageInfo
{
    protected static $ranges = array(
        'image/jpeg' => 32768,
        'image/png' => 25,
        'image/gif' => 11,
        'image/bmp' => 29,
        'image/x-icon' => 0
    );

    protected $connection;
    protected $finfo;
    protected $mime;
    protected $content = '';
    protected $url = '';
    protected $config = array(
        CURLOPT_MAXREDIRS => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_ENCODING => '',
        CURLOPT_AUTOREFERER => true,
        CURLOPT_USERAGENT => 'Embed PHP Library',
        CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
    );

    /**
     * Init the curl connection
     * 
     * @param string $url The image url
     * @param resource $finfo A fileinfo resource to get the mimetype
     */
    public function __construct($url, $finfo)
    {
        $this->url = $url;
        $this->finfo = $finfo;
        
        $this->connection = curl_init();

        curl_setopt_array($this->connection, array(
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_URL => $this->url,
            CURLOPT_RANGE => "0-".self::$ranges['image/jpeg'],
            CURLOPT_WRITEFUNCTION => array($this, 'writeCallback'),
        ) + $this->config);
    }

    /**
     * Returns the curl resource
     * 
     * @return resource
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Execute the curl request.
     */
    public function exec()
    {
        curl_exec($this->connection);
        curl_close($this->connection);
    }

    /**
     * Get the image data with the format array($width, $height, $mimetype)
     * 
     * @return null|array
     */
    public function getData()
    {
        if ($this->mime && ($info = @getimagesizefromstring($this->content))) {
            return array($info[0], $info[1], $this->mime);
        }
    }

    /**
     * Callback used to save the first bytes of the body content
     * 
     * @param resource $connection
     * @param string   $string
     * 
     * return integer
     */
    public function writeCallback($connection, $string)
    {
        $this->content .= $string;

        if (!$this->mime) {
            $this->mime = finfo_buffer($this->finfo, $this->content);
        }

        if (isset(static::$ranges[$this->mime])) {
            if (strlen($this->content) < static::$ranges[$this->mime]) {
                return strlen($string);
            }
        } else {
            $this->mime = null;
        }

        return -1;
    }
}
