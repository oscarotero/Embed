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

		$images = $icons = array();

		//Links
		foreach ($Html->getElementsByTagName('link') as $Link) {
			if ($Link->hasAttribute('rel') && $Link->hasAttribute('href')) {
				$rel = trim(strtolower($Link->getAttribute('rel')));
				$href = $Url->getAbsolute($Link->getAttribute('href'));

				if (empty($href)) {
					continue;
				}

				switch ($rel) {
					case 'favicon':
					case 'favico':
					case 'icon':
					case 'shortcut icon':
						$this->set('icon', $href);
						$icons[] = $href;
						break;

					case 'apple-touch-icon-precomposed':
					case 'apple-touch-icon':
						$icons[] = $href;
						break;

					case 'canonical':
					case 'video_src':
						$this->set($rel, $href);
						break;
					
					case 'image_src':
						$images[] = $href;
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

		//Title
		$Title = $Html->getElementsByTagName('title');

		if ($Title && ($Title->length > 0)) {
			$this->set('title', $Title->item(0)->nodeValue);
		}

		//Meta info
		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('name')) {
				$name = strtolower($Tag->getAttribute('name'));

				switch ($name) {
					case 'msapplication-tileimage':
						$icons[] = $Url->getAbsolute($Tag->getAttribute('content'));
						continue 2;

					case 'twitter:image':
						$images[] = $Url->getAbsolute($Tag->getAttribute('content'));
						continue 2;
				}
			}

			if ($Tag->hasAttribute('http-equiv') && $Tag->hasAttribute('content')) {
				$name = strtolower($Tag->getAttribute('http-equiv'));
				$this->set($name, $Tag->getAttribute('content'));
			}
		}
		
		//img tags
		foreach ($Html->getElementsByTagName('img') as $Tag) {
			if ($Tag->hasAttribute('src')) {
				$images[] = $Url->getAbsolute($Tag->getAttribute('src'));
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
		$images = $this->get('images');

		return $images ? $images[0] : null;
	}

	public function getWidth () {
		return $this->get('video_width');
	}

	public function getHeight () {
		return $this->get('video_height');
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
	public function getImageFromSet ($index=null) {
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

}
