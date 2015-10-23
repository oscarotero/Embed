<?php

/**
 * Adapter to generate embed code from SassMeister.
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;

class Sassmeister extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'http://sassmeister.com/gist/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $id = $this->request->getDirectoryPosition(1);

        return Utils::iframe("http://embed.sassmeister.com/gist/{$id}");
    }
}
