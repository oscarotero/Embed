<?php
class FacebookTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://www.facebook.co/permalink.php?story_fbid=827163017327807&id=149460691764713');

        $this->assertEquals($info->title, 'Aquí vos deixamos unhas imaxes da nosa... - DAG, Asociación Galega de Deseñadores | Facebook');
        $this->assertEquals($info->width, 500);
        $this->assertEquals($info->code, <<<EOT
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=827163017327807&id=149460691764713" data-width="500"></div>
EOT
        );
        $this->assertEquals($info->type, 'rich');
    }
}
