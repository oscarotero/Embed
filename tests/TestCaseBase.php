<?php
/**
 * Base class with custom utilities for testing
 */
abstract class TestCaseBase extends PHPUnit_Framework_TestCase
{
    /**
     * Compare two string, replacing some conflicting characters
     * that generate failing tests
     */
    public function assertString($string1, $string2)
    {
        $string1 = trim(preg_replace('/\s+/m', ' ', $string1));
        $string2 = trim(preg_replace('/\s+/m', ' ', $string2));

        $this->assertSame($string1, $string2);
    }

    /**
     * Execute Embed with an url and returns the info
     *
     * @param string
     *
     * @return AdapterInterface
     */
    public function getInfo($url)
    {
        return Embed\Embed::create($url);
    }
}
