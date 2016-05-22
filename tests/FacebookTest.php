<?php

class FacebookTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.facebook.co/permalink.php?story_fbid=827163017327807&id=149460691764713',
            [
                'title' => 'Aquí vos deixamos unhas imaxes da nosa... - DAG, Asociación Galega de Deseñadores | Facebook',
                'width' => 552,
                'code' => '<div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3"; fjs.parentNode.insertBefore(js, fjs); }(document, \'script\', \'facebook-jssdk\'));</script><div class="fb-post" data-href="https://www.facebook.com/asociaciondag/posts/827163017327807" data-width="552"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/asociaciondag/posts/827163017327807"><p>Aqu&#xed; vos deixamos unhas imaxes da nosa visita do pasado s&#xe1;bado &#xe1; Guarda. Moi agradecidos &#xe1; Asociaci&#xf3;n Naturalista do Baixo Mi&#xf1;o www.anabam.org e a Malde Arqueolox&#xed;a</p>Publicado por <a href="https://www.facebook.com/asociaciondag/">DAG, Asociación Galega de Deseñadores</a> en&nbsp;<a href="https://www.facebook.com/asociaciondag/posts/827163017327807">Martes, 21 de octubre de 2014</a></blockquote></div></div>',
                'type' => 'rich',
            ]
        );
    }
}
