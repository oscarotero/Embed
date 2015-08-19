<?php
class DevianArtTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.deviantart.com/art/Misty-510056679');

        $this->assertString($info->title, 'Misty');
        $this->assertString($info->description, 'Face Book llOnline Store ll Tumblr ll Help support me on Patreon and get special perks<3llArtstation I used to watch pokemon when I was younger, and it was  the one...');
        $this->assertString($info->imageWidth, 695);
        $this->assertString($info->imageHeight, 900);
        $this->assertString($info->type, 'photo');

        $this->assertInstanceOf('Embed\\Providers\\OEmbed', $info->getProvider('oembed'));
        $this->assertString('DeviantArt', $info->getProvider('oembed')->getProviderName());
    }

    public function testTwo()
    {
        $info = $this->getInfo('http://pachunka.deviantart.com/art/Cope-145564099');

        $this->assertString($info->title, 'Cope');
        $this->assertString($info->description, '$randomduck for president, 2012. There may or may not be some irony surrounding this image.');
        $this->assertString($info->imageWidth, 448);
        $this->assertString($info->imageHeight, 672);
        $this->assertString($info->type, 'photo');
        $this->assertString($info->authorName, 'Pachunka');

        $this->assertInstanceOf('Embed\\Providers\\OEmbed', $info->getProvider('oembed'));
        $this->assertString('DeviantArt', $info->getProvider('oembed')->getProviderName());
    }
}
