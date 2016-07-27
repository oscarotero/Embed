<?php

namespace Embed\Adapters;

use Embed\Request;

/**
 * Adapter to generate embed code from snipplr.com.
 */
class Snipplr extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://snipplr.com/view/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $id = $this->request->getDirectoryPosition(1);

        return <<<CODE
<div id="snipplr_embed_{$id}" class="snipplr_embed"><a target_"blank" href="http://snipplr.com/view/{$id}">View this snippet</a> on Snipplr</div><script type="text/javascript" src="http://snipplr.com/js/embed.js"></script><script type="text/javascript" src="http://snipplr.com/json/{$id}"></script>
CODE;
    }
}
