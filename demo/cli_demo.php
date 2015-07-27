<?php
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');

include '../src/autoloader.php';

if(!(isset($argv[1]))) {
    echo 'You must provide url as first argument.';
    die();
}

$url = $argv[1];
try {
    $info = Embed\Embed::create($url,[], [
        'requestConfig' =>  [
            'allow429' => true
        ]
    ]);
    var_dump($info->title);
} catch (Exception $exception) {
    echo "EXCEPTION\n";
    echo "=========\n";
    echo $exception->getMessage()."\n";
    die();
}