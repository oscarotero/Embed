<?php

namespace Embed\Tests;

use Embed\Embed;
use PHPUnit_Framework_TestCase;
use InvalidArgumentException;

/**
 * Base class with custom utilities for testing.
 */
abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
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
     * @param string $url
     * @param array $info
     * @param array|null $config
     */
    protected function assertEmbed($url, array $info, array $config = null)
    {
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

                case 'images':
                    $this->assertCount($value, $i->$name);
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
    }
}
