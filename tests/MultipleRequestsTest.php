<?php
declare(strict_types = 1);

namespace Embed\Tests;

use Embed\Embed;
use PHPUnit\Framework\TestCase;

class MultipleRequestsTest extends TestCase
{
    public function testParallel()
    {
        $embed = new Embed();
        $infos = $embed->getMulti(
            'https://oscarotero.com',
            'https://github.com/oscarotero',
            'https://twitter.com/misteroom',
        );

        $this->assertCount(3, $infos);
        $this->assertSame('https://oscarotero.com/', $infos[0]->url);
        $this->assertSame('https://github.com/oscarotero', $infos[1]->url);
        $this->assertSame('https://twitter.com/misteroom', $infos[2]->url);
    }
}
