<?php
/**
 * Generic images provider.
 * Load the images from the html data of an url and store it
 * @author Oliver Lillie
 */
namespace Embed\Providers;

use Embed\Url;
use Embed\Viewers;

class Images extends Provider {
	public function __construct (Url $Url) {
		if (!($Html = $Url->getHtmlContent())) {
			return false;
		}

        $base_url = $Url->getUrl();
        
        $images = array();
        $icons = array();

        // images
        foreach ($Html->getElementsByTagName('img') as $Tag) {
            if ($Tag->hasAttribute('src')) {
                $src = $Tag->getAttribute('src');
                
                $img = new \stdClass();
                $img->width = null;
                $img->height = null;
                $img->alt = null;
                
                $img->src = $this->_getSrc($base_url, $src);
                if($Tag->hasAttribute('width') === true){
                    $img->width = (int) $Tag->getAttribute('width');
                }
                if($Tag->hasAttribute('height') === true){
                    $img->height = (int) $Tag->getAttribute('height');
                }
                if($Tag->hasAttribute('alt') === true){
                    $img->alt = $Tag->getAttribute('alt');
                }
                
                array_push($images, $img);
            }
        }
        // favicons and apple touch
        foreach ($Html->getElementsByTagName('link') as $Tag) {
            if ($Tag->hasAttribute('rel') && in_array(strtolower($Tag->getAttribute('rel')), array('apple-touch-icon', 'icon', 'favico', 'favicon')) && $Tag->hasAttribute('href')) {
                $src = $Tag->getAttribute('href');
                array_push($icons, $src);
            }
        }
        // windows tile, twitter image
        foreach ($Html->getElementsByTagName('meta') as $Tag) {
            if ($Tag->hasAttribute('name')) {
                if($Tag->hasAttribute('content')){
                    $name = strtolower($Tag->getAttribute('name'));
                    $src = $Tag->getAttribute('content');
                    if($name === 'msapplication-tileimage')
                    {
                        array_push($icons, $this->_getSrc($base_url, $src));
                    }
                    else if($name === 'twitter:image')
                    {
                        array_push($icons, $this->_getSrc($base_url, $src));
                    }
                }
            }
            else if ($Tag->hasAttribute('property') && strtolower($Tag->getAttribute('property')) == 'og:image' && $Tag->hasAttribute('content')) {
                $src = $Tag->getAttribute('content');
                array_push($images, $this->_getSrc($base_url, $src));
            }
        }
        
        $this->set('icons', $icons);
        $this->set('images', $images);
	}
    
    /**
     * Returns an array of stdClass objects of the images found.
     *
     * @access public
     * @author Oliver Lillie
     * @return array
     */
    public function getImages(){
        return $this->get('images');
    }
    
    /**
     * Returns an array of strings of the srcs of the icons found.
     *
     * @access public
     * @author Oliver Lillie
     * @return array
     */
    public function getIcons(){
        return $this->get('icons');
    }
    
    /**
     * Contains the current image index.
     *
     * @access public
     * @author Oliver Lillie
     * @var integer
     */
    protected $_image_index = -1;

    /**
     * Returns a specific image src specified by $index, otherwise returns null.
     * If no index is specified then the next image src is returned.
     *
     * @access public
     * @author Oliver Lillie
     * @param mixed $index Integer index of the requested image or null.
     * @return mixed Returns a string if the given index is available otherwise
     *  returns null.
     */
    public function getImage($index=null){
        $images = $this->get('images');
        if($index === null){
            $index = $this->_image_index;
            $this->_image_index += 1;
        }
        return isset($images[$index]) === true ? $images[$index] : null;
    }
    
    /**
     * Contains the current icon index.
     *
     * @access public
     * @author Oliver Lillie
     * @var integer
     */
    protected $_icon_index = -1;
    
    /**
     * Returns a specific icon src specified by $index, otherwise returns null.
     * If no index is specified then the next icon src is returned.
     *
     * @access public
     * @author Oliver Lillie
     * @param mixed $index Integer index of the requested icon or null.
     * @return mixed Returns a string if the given index is available otherwise
     *  returns null.
     */
    public function getIcon($index=null){
        $icons = $this->get('icons');
        if($index === null){
            $index = $this->_icon_index += 1;
            $this->_icon_index += 1;
        }
        return isset($icons[$index]) === true ? $icons[$index] : null;
    }
    
    /**
     * Resolves a src of an image to it's full path.
     *
     * @access public
     * @author Oliver Lillie
     * @param string $base 
     * @param string $src 
     * @return string
     */
    protected function _getSrc($base, $src){
        if(substr($src, 0, 2) === '//'){
            $src = 'https:'.$src;
        }
        if(substr($src, 0, 4) !== 'http'){
            $src = $this->_resolveUrl($url_string, $src);
        }
        
        return $this->_resolveUrl($base, $src);
    }
    
    /**
     * Resolves urls like realpath
     *
     * @see http://www.php.net/manual/en/function.realpath.php#85388
     * @access public
     * @author Isaac Z. Schlueter i at foohack dot com
     * @param string $base 
     * @param string $src 
     * @return string
     */
    protected function _resolveUrl($base, $href) { 
        // href="" ==> current url. 
        if(!$href) { 
            return $base; 
        } 

        // href="http://..." ==> href isn't relative 
        $rel_parsed = parse_url($href); 
        if (array_key_exists('scheme', $rel_parsed) === true){ 
            return $href; 
        } 

        // add an extra character so that, if it ends in a /, we don't lose the last piece. 
        $base_parsed = parse_url($base.' '); 
        // if it's just server.com and no path, then put a / there. 
        if(array_key_exists('path', $base_parsed) === false){ 
            $base_parsed = parse_url($base.'/ '); 
        } 

        // href="/ ==> throw away current path. 
        if($href{0} === "/") { 
            $path = $href; 
        }
        else{ 
            $path = dirname($base_parsed['path']).'/'.$href; 
        } 

        // bla/./bloo ==> bla/bloo 
        $path = preg_replace('~/\./~', '/', $path); 

        // resolve /../ 
        // loop through all the parts, popping whenever there's a .., pushing otherwise. 
        $parts = array(); 
        foreach (explode('/', preg_replace('~/+~', '/', $path)) as $part){
            if($part === ".."){ 
                array_pop($parts); 
            }
            else if($part!=""){ 
                $parts[] = $part; 
            } 
        } 

        return ( 
            (array_key_exists('scheme', $base_parsed) === true) ? 
                $base_parsed['scheme'] . '://' . $base_parsed['host'] : ''
        ) . '/' . implode('/', $parts); 
    }
}
