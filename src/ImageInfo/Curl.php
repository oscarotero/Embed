<?php
namespace Embed\ImageInfo;

/**
 * Class to retrieve the size and mimetype of images using curl
 */
class Curl implements ImageInfoInterface
{
    protected static $mimetypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/bmp',
        'image/x-icon',
    ];

    protected $connection;
    protected $finfo;
    protected $mime;
    protected $info;
    protected $content = '';
    protected $config = [
        CURLOPT_MAXREDIRS => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_ENCODING => '',
        CURLOPT_AUTOREFERER => true,
        CURLOPT_USERAGENT => 'Embed PHP Library',
        CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
    ];

    /**
     * {@inheritdoc}
     */
    public static function getImagesInfo(array $urls, array $config = null)
    {
        if (!$urls) {
            return [];
        }

        if (count($urls) === 1) {
            $info = self::getImageInfo($urls[0], $config);

            return $info ? [$urls[0] => $info] : [];
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $images = [];
        $connections = curl_multi_init();

        foreach ($urls as $url) {
            $images[$url] = new static($url, $finfo, $config);

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

        $info = [];

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
     * Get the info of only one image
     *
     * @param string     $url
     * @param null|array $config
     *
     * @return array|null
     */
    public static function getImageInfo($url, array $config = null)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $image = new static($url, $finfo, $config);

        $curl = $image->getConnection();
        curl_exec($curl);
        curl_close($curl);

        $info = $image->getInfo();

        finfo_close($finfo);

        return $info;
    }

    /**
     * Init the curl connection
     *
     * @param string     $url    The image url
     * @param resource   $finfo  A fileinfo resource to get the mimetype
     * @param null|array $config Custom options for the curl request
     */
    public function __construct($url, $finfo, array $config = null)
    {
        $this->finfo = $finfo;
        $this->connection = curl_init();

        if ($config) {
            $this->config = array_replace($this->config, $config);
        }

        curl_setopt_array($this->connection, [
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_URL => $url,
            CURLOPT_WRITEFUNCTION => [$this, 'writeCallback'],
        ] + $this->config);
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
     * Get the image info with the format [$width, $height, $mimetype]
     *
     * @return null|array
     */
    public function getInfo()
    {
        return $this->info;
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

            if (!in_array($this->mime, static::$mimetypes, true)) {
                $this->mime = null;
                return -1;
            }
        }

        if (!($info = getimagesizefromstring($this->content))) {
            return strlen($string);
        }

        $this->info = array($info[0], $info[1], $this->mime);
        return -1;
    }
}
