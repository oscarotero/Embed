<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 * It also loads the <title> and <meta name="description"> tags
 */
namespace Embed\Providers;

use Embed\Url;
use Embed\Viewers;

class Html extends Provider {
	public function __construct (Url $Url) {
		if (!($Html = $Url->getHtmlContent())) {
			return false;
		}

        $base_url = $Url->getUrl();
        
        $images = array();
        $icons = array();

		foreach ($Html->getElementsByTagName('link') as $Link) {
			if ($Link->hasAttribute('rel') && $Link->hasAttribute('href')) {
				$rel = trim(strtolower($Link->getAttribute('rel')));
				$href = $this->_getFullUrl($Link->getAttribute('href'));

				if (empty($href)) {
					continue;
				}

				switch ($rel) {
					case 'favicon':
					case 'favico':
					case 'icon':
                    case 'shortcut icon':
                        $this->set('icon', $href);
                        array_push($icons, $href);
                        break;

                    case 'apple-touch-icon':
                        array_push($icons, $href);
                        break;

					case 'canonical':
					case 'video_src':
					case 'image_src':
						$this->set($rel, $href);
						break;

					case 'alternate':
						if ($Link->hasAttribute('type')) {
							switch ($Link->getAttribute('type')) {
								case 'application/json+oembed':
								case 'application/xml+oembed':
								case 'text/json+oembed':
								case 'text/xml+oembed':
									$this->set('oembed', $href);
									break;
							}
						}
						break;
				}
			}
		}

		$Title = $Html->getElementsByTagName('title');

		if ($Title && ($Title->length > 0)) {
			$this->set('title', $Title->item(0)->nodeValue);
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('name')) {
				$name = strtolower($Tag->getAttribute('name'));
                if($name === 'msapplication-tileimage'){
                    array_push($icons, $this->_getFullUrl($base_url, $Tag->getAttribute('content')));
                }
                else if($name === 'twitter:image'){
                    $img = new \stdClass();
                    $img->width = null;
                    $img->height = null;
                    $img->alt = null;
                    $img->src = $this->_getFullUrl($base_url, $Tag->getAttribute('content'));
                    array_push($images, $img);
                }
			} else if ($Tag->hasAttribute('http-equiv')) {
				$name = strtolower($Tag->getAttribute('http-equiv'));
			} else if ($Tag->hasAttribute('property')) {
				$name = strtolower($Tag->getAttribute('property'));
                if ($name == 'og:image' && $Tag->hasAttribute('content')) {
                    $img = new \stdClass();
                    $img->width = null;
                    $img->height = null;
                    $img->alt = null;
                    $img->src = $this->_getFullUrl($base_url, $Tag->getAttribute('content'));
                    array_push($images, $img);
                }                
			} else {
				continue;
			}

			if ($Tag->hasAttribute('content')) {
				$this->set($name, $Tag->getAttribute('content'));
			}
		}
        
        // images
        foreach ($Html->getElementsByTagName('img') as $Tag) {
            if ($Tag->hasAttribute('src')) {
                
                $img = new \stdClass();
                $img->width = null;
                $img->height = null;
                $img->alt = null;
                $img->src = $this->_getFullUrl($base_url, $Tag->getAttribute('src'));
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

        $this->set('icons', $icons);
        $this->set('images', $images);
	}

	public function getTitle () {
		return $this->get('title');
	}

	public function getDescription () {
		return $this->get('description');
	}

	public function getType () {
		return $this->has('video_src') ? 'video' : 'link';
	}

	public function getCode () {
		if ($this->has('video_src')) {
			switch ($this->get('video_type')) {
				case 'application/x-shockwave-flash':
					return Viewers::flash($this->get('video_src'), $this->getWidth(), $this->getHeight());
			}
		}
	}

	public function getUrl () {
		return $this->get('canonical');
	}

	public function getProviderIcon () {
		return $this->get('icon');
	}

	public function getImage () {
		return $this->get('image_src') ?: $this->get('image');
	}

	public function getWidth () {
		return $this->get('image_width') ?: $this->get('video_width');
	}

	public function getHeight () {
		return $this->get('image_height') ?: $this->get('video_height');
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
    public function getImageFromSet($index=null){
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
    public function getIconFromSet($index=null){
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
    protected function _getFullUrl($base, $src){
        $src = trim($src);
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
?>