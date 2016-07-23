<?php

/**
 * Base class with custom utilities for testing.
 */
use Embed\Embed;
use Embed\Request;

abstract class TestCaseBase extends PHPUnit_Framework_TestCase
{
    /**
     * Compare two string, replacing some conflicting characters
     * that generate failing tests.
     */
    public function assertString($string1, $string2)
    {
        $string1 = trim(preg_replace('/\s+/um', ' ', $string1));
        $string2 = trim(preg_replace('/\s+/um', ' ', $string2));

        $this->assertSame($string1, $string2);
    }

    /**
     * Execute Embed with an url and returns the info.
     *
     * @param string
     *
     * @return AdapterInterface
     */
    protected function assertEmbed($url, array $info, array $config = array())
    {
        if (getenv('embed_resolver')) {
            $config['resolver'] = ['class' => 'Embed\\RequestResolvers\\'.getenv('embed_resolver')];
        }

        $i = Embed::create($url, $config);

        foreach ($info as $name => $value) {
            switch ($name) {
                case 'title':
                case 'description':
                case 'url':
                case 'type':
                case 'image':
                case 'imageWidth':
                case 'imageHeight':
                case 'authorName':
                case 'authorUrl':
                case 'providerName':
                case 'providerUrl':
                case 'providerIcon':
                case 'license':
                    $this->assertString($value, $i->$name);
                    break;

                case 'code':
                    if ($value === true) {
                        $this->assertNotEmpty($value);
                    } else {
                        $this->assertString($value, $i->$name);
                    }
                    break;

                case 'width':
                case 'height':
                case 'imageWidth':
                case 'imageHeight':
                case 'tags':
                    $this->assertSame($value, $i->$name);
                    break;

                case 'linkedData':
                    $this->assertEquals($value, $i->$name);
                    break;

                default:
                    throw new InvalidArgumentException("No valid {$name} assertion");
            }
        }

        $this->assertOembedAutodiscover($i->getRequest());
    }

    /**
     * This method allow to discover sites including the oembed endpoint in the code,
     * to remove the custom Oembed provider if exists.
     */
    private function assertOembedAutodiscover(Request $request)
    {
        $className = $request->getClassNameForDomain();

        //exceptions
        if (in_array($className, ['Wordpress', 'Youtube', 'Jsbin'])) {
            return;
        }

        $class = 'Embed\\Providers\\OEmbed\\'.$className;

        if (class_exists($class) && !$class::embedInDomIsBroken()) {
            $body = $request->getContent();

            $this->assertFalse(strpos($body, '/json+oembed'), 'Autodiscovered json OEmbed');
            $this->assertFalse(strpos($body, '/xml+oembed'), 'Autodiscovered xml OEmbed');
        }
    }
}
