<?php
/**
 * Adapter to provide all information from lavozdegalicia.es that needs a special query parameter to generate a session cookie
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;

class Lavozdegalicia extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'http://www.lavozdegalicia.es/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        $this->request = $this->request->withQueryParameter('piano_d', '1');

        $this->run();
    }
}
