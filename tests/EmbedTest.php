<?php
include_once dirname(__DIR__).'/Embed/autoloader.php';

class EmbedTest extends PHPUnit_Framework_TestCase {
	private function checkUrl ($url, array $values) {
		$info = Embed\Embed::create(new Embed\Url($url));

		foreach ($values as $name => $value) {
			$this->assertEquals($value, $info->$name);
		}

		return $info;
	}

	public function testUrls () {
		$this->checkUrl(
			'http://www.youtube.com/watch?v=eiHXASgRTcA', 
			array(
				'title' => 'Noisy kittens waiting for dinner!',
				'description' => 'Disclaimer - 7 week old fostered kittens waiting on their dinner being prepared. They had been ill with cat flu and were just starting to get their appetite ...',
				'image' => 'http://i1.ytimg.com/vi/eiHXASgRTcA/hqdefault.jpg',
				'imageWidth' => 480,
				'imageHeight' => 360,
				'url' => 'http://www.youtube.com/watch?v=eiHXASgRTcA',
				'type' => 'video',
				'authorName' => 'smshdchrb',
				'authorUrl' => 'http://www.youtube.com/user/smshdchrb',
				'providerName' => 'YouTube',
				'providerUrl' => 'http://www.youtube.com/',
				'providerIcon' => 'http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico',
				'width' => 459,
				'height' => 344
			)
		);

		$this->checkUrl(
			'http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html', 
			array(
				'title' => 'Echoes of George W. Bush blues in Barack Obama\'s 2nd term',
				'description' => 'As Barack Obama heads into his sixth year in the White House, his aides says they are all too familiar with the notion that his predicament looks similar to George W. Bush’s eight years ago. They’re two presidents dogged by crises largely of their own making, whose welcome with Americans has worn thin after two marathon elections. One president...',
				'image' => 'http://images.politico.com/global/2013/12/18/131218_george_w_bush_barack_obama_ap_605.jpg',
				'imageWidth' => 605,
				'imageHeight' => 328,
				'url' => 'http://www.politico.com/story/2013/12/presidents-barack-obama-george-w-bush-second-term-101314.html',
				'type' => 'link',
				'providerName' => 'POLITICO',
				'providerUrl' => 'http://politico.com',
				'providerIcon' => 'http://www.politico.com/favicon.ico'
			)
		);

		$this->checkUrl(
			'http://www.usatoday.com/story/tech/2013/07/19/microsoft-stock-plummets-12/2569413/', 
			array(
				'title' => 'Microsoft stock plummets 11%',
				'description' => 'Investors grow skittish over PC prospects.',
				'image' => 'http://www.gannett-cdn.com/-mm-/fe06d222bdd27d15d6ac2b2c11dd7a17f46ceda0/c=141-0-3330-2406&r=x117&c=155x114/local/-/media/USATODAY/GenericImages/2013/07/18/1374181578000-B01-MONEYLINE-BALLMER-12-56733869.JPG',
				'imageWidth' => 155,
				'imageHeight' => 114,
				'url' => 'http://www.usatoday.com/story/tech/2013/07/19/microsoft-stock-plummets-12/2569413/',
				'type' => 'link',
				'providerName' => 'usatoday',
				'providerUrl' => 'http://usatoday.com',
				'providerIcon' => 'http://www.gannett-cdn.com/sites/usatoday/images/favicon.png'
			)
		);

		$this->checkUrl(
			'http://www.dailymotion.com/video/xy0wd_chats-paresseux', 
			array(
				'title' => 'Chats paresseux',
				'description' => 'Regarder la vidéo «Chats paresseux» envoyée par jeanbamin sur Dailymotion.',
				'image' => 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg',
				'imageWidth' => 320,
				'imageHeight' => 240,
				'url' => 'http://www.dailymotion.com/video/xy0wd_chats-paresseux_animals',
				'type' => 'video',
				'providerName' => 'Dailymotion',
				'providerUrl' => 'http://www.dailymotion.com',
				'providerIcon' => 'http://static1.dmcdn.net/images/apple-touch-icon.png.vcbf86c6fe83fbbe19'
			)
		);
	}
}