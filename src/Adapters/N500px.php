<?php

/**
 * Adapter to provide all information from any webpage.
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;
use Embed\Utils;

class N500px extends Adapter implements AdapterInterface
{
    
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://500px.com/photo/*',
        ]);;
    }
    

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url=$this->getUrl();
        $matches=array();
        preg_match('#(https?://500px.com/photo/\d+)#si',$this->getUrl(),$matches);        
        if (isset($matches[1]) && $matches[1]) {
           return Utils::iframe($matches[1].'/embed.html', $this->getWidth(), $this->getHeight());
        }       
        return '';          
    }


    /**
     * {@inheritdoc}
     */
    public function run()
    {        
        //order is important
        $this->addProvider('oembed', new Providers\OEmbed());        
        $this->addProvider('opengraph', new Providers\OpenGraph());
        echo $this->request->getUrl();
    }
}
