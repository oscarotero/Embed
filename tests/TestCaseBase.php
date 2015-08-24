<?php
/**
 * Base class with custom utilities for testing
 */
use Embed\Embed;

abstract class TestCaseBase extends PHPUnit_Framework_TestCase
{
    /**
     * Compare two string, replacing some conflicting characters
     * that generate failing tests
     */
    public function assertString($string1, $string2)
    {
        $string1 = trim(preg_replace('/\s+/m', ' ', mb_convert_encoding($string1, 'UTF-8')));
        $string2 = trim(preg_replace('/\s+/m', ' ', mb_convert_encoding($string2, 'UTF-8')));

        $this->assertSame($string1, $string2);
    }

    /**
     * Execute Embed with an url and returns the info
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
                case 'code':
                case 'authorName':
                case 'authorUrl':
                case 'providerName':
                case 'providerUrl':
                case 'providerIcon':
                    $this->assertString($value, $i->$name);
                    break;

                case 'width':
                case 'height':
                case 'imageWidth':
                case 'imageHeight':
                    $this->assertSame($value, $i->$name);
                    break;

                default:
                    throw new InvalidArgumentException("No valid {$name} assertion");
            }
        }
    }
}
