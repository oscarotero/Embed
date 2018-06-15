<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to generate embed code from snipplr.com.
 */
class Snipplr extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'snipplr.com/view/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $id = $this->getResponse()->getUrl()->getDirectoryPosition(1);

        return <<<CODE
<div id="snipplr_embed_{$id}" class="snipplr_embed"><a target_"blank" href="https://snipplr.com/view/{$id}">View this snippet</a> on Snipplr</div><script type="text/javascript" src="https://snipplr.com/js/embed.js"></script><script type="text/javascript" src="https://snipplr.com/json/{$id}"></script>
CODE;
    }
}
