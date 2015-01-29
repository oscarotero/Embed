<?php
namespace Embed;

/**
 * Class to retrieve the size and mimetype of images using curl
 */
class ImageInfo
{
    protected static $mimetypes = array(
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/bmp',
        'image/x-icon',
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
     * Get the info of an image
     *
     * @param string $url
     *
     * @return array|null
     */
    public static function getImageInfo($url)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $image = new static($url, $finfo);

        $curl = $image->getConnection();
        curl_exec($curl);
        curl_close($curl);

        $info = $image->getInfo();

        finfo_close($finfo);

        return $info;
    }

    /**
     * Get the info of multiple images using curl parallel request
     *
     * @param array $urls
     *
     * @return array
     */
    public static function getImagesInfo(array $urls)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $images = array();
        $connections = curl_multi_init();

        foreach ($urls as $url) {
            $images[$url] = new static($url, $finfo);

            curl_multi_add_handle($connections, $images[$url]->getConnection());
        }

        do {
            $return = curl_multi_exec($connections, $active);
        } while ($return === CURLM_CALL_MULTI_PERFORM);

        while ($active && $return === CURLM_OK) {
            if (curl_multi_select($connections) === -1) {
                usleep(100);
            }

            do {
                $return = curl_multi_exec($connections, $active);
            } while ($return === CURLM_CALL_MULTI_PERFORM);
        }

        $info = array();

        foreach ($images as $url => $image) {
            curl_multi_remove_handle($connections, $image->getConnection());

            if (($i = $image->getInfo())) {
                $info[$url] = $i;
            }
        }

        finfo_close($finfo);
        curl_multi_close($connections);

        return $info;
    }

    /**
     * Init the curl connection
     *
     * @param string   $url   The image url
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
     * Get the image info with the format array($width, $height, $mimetype)
     *
     * @return null|array
     */
    public function getInfo()
    {
        if ($this->mime && ($info = getimagesizefromstring($this->content))) {
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

        if (in_array($this->mime, static::$mimetypes, true)) {
            if (!getimagesizefromstring($this->content)) {
                return strlen($string);
            }
        } else {
            $this->mime = null;
        }

        return -1;
    }
}
