<?php

namespace Embed\Tests;

class Lavozdegalicia extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.lavozdegalicia.es/noticia/cultura/2015/07/26/desenadores-galegos-organizan-seu-primeiro-encontro-rianxo/0003_201507G26P46995.htm',
            [
                'title' => 'Deseñadores galegos organizan o seu primeiro encontro en Rianxo',
                'type' => 'link',
                'providerName' => 'La Voz de Galicia',
                'providerUrl' => 'http://lavozdegalicia.es',
            ]
        );
    }
}
