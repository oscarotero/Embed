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
        if (is_numeric($this->request->getDirectoryPosition(1))) {            
           return Utils::iframe($this->request->createUrl()->withDirectoryPosition(2,'embed.html'), $this->width, $this->height);
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
    }
}
