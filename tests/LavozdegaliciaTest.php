<?php
class Lavozdegalicia extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.lavozdegalicia.es/noticia/cultura/2015/07/26/desenadores-galegos-organizan-seu-primeiro-encontro-rianxo/0003_201507G26P46995.htm');

        $this->assertString($info->title, 'Deseñadores galegos organizan o seu primeiro encontro en Rianxo');
        $this->assertString($info->type, 'link');
        $this->assertString($info->providerName, 'La Voz de Galicia');
        $this->assertString($info->providerUrl, 'http://lavozdegalicia.es');
    }
}
