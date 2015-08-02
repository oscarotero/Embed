<?php
class Lavozdegalicia extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.lavozdegalicia.es/noticia/cultura/2015/07/26/desenadores-galegos-organizan-seu-primeiro-encontro-rianxo/0003_201507G26P46995.htm');

        $this->assertEquals($info->title, 'Deseñadores galegos organizan o seu primeiro encontro en Rianxo');
        $this->assertEquals($info->type, 'link');
        $this->assertEquals($info->providerName, 'La Voz de Galicia');
        $this->assertEquals($info->providerUrl, 'http://lavozdegalicia.es');
    }
}
