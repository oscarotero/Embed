<?php
/**
 * Adapter to get more info from parleys.com
 */
namespace Embed\Adapters;

use Embed\Request;

class Parleys extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        // http://www.parleys.com/#st=5&id=2912&sl=0
        return $request->match(['*.parleys.com/#*']);
    }


    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {
        $fragments = $this->request->getFragmentArray();

        if (!empty($fragments['id'])) {
            return 'http://parleys.com/d/'.$fragments['id'];
        }

        if ($this->request->hasParameter('id')) {
            return 'http://parleys.com/d/'.$this->request->getParameter('id');
        }

        return parent::getUrl();
    }


    /**
     * {@inheritDoc}
     */
    public function getProviderIcon()
    {
        return 'http://parleys.com/favicon.ico';
    }
}
