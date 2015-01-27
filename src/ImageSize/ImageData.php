<?php
namespace Embed\ImageSize;

/**
 * Class to retrieve the first bytes of an image using curl
 */
class ImageData
{
    protected $connection;
    protected $finfo;
    protected $range = 32768;
    protected $position = 0;
    protected $mime;
    protected $content = '';
    protected $url = '';
    protected $data;
    protected $config = array(
        CURLOPT_MAXREDIRS => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_ENCODING => '',
        CURLOPT_AUTOREFERER => true,
        CURLOPT_USERAGENT => 'Embed PHP Library',
        CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
    );

    public function __construct($url, $finfo)
    {
        $this->url = $url;
        $this->finfo = $finfo;
        $this->initConnection();
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function getData()
    {
        return $this->data;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function getChars($n)
    {
        $result = substr($this->content, $this->position, $n);
        $this->position += $n;

        return mb_convert_encoding($result, '8BIT');
    }

    /**
     * Create a curl resource
     *
     * @return resource
     */
    protected function initConnection()
    {
        $this->connection = curl_init();

        curl_setopt_array($this->connection, array(
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_URL => $this->url,
            CURLOPT_RANGE => "0-{$this->range}",
            CURLOPT_WRITEFUNCTION => array($this, 'writeCallback'),
        ) + $this->config);
    }

    /**
     * Saves the first bytes of the body content
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

        switch ($this->mime) {
            case 'image/jpeg':
                if ((strlen($this->content) >= $this->range) && ($size = Jpeg::getSize($this))) {
                    $this->data = $size;
                    $this->data[] = $this->mime;
                
                    return -1;
                }
                break;

            case 'image/png':
            case 'image/gif':
            case 'image/bmp':
                $sizer = __NAMESPACE__.'\\'.ucfirst(substr(strstr($this->mime, '/'), 1));

                if (class_exists($sizer) && ($size = $sizer::getSize($this))) {
                    $this->data = $size;
                    $this->data[] = $this->mime;
                }
                
                return -1;

            case 'image/x-icon':
                $this->data = array(0, 0, $this->mime);

            default:
                if ($this->mime) {
                    return -1;
                }
        }

        return strlen($string);
    }
}
