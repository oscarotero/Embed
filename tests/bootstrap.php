<?php
error_reporting(E_ALL);

if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require_once __DIR__.'/../vendor/autoload.php';
}

include_once dirname(__DIR__).'/src/autoloader.php';
include_once __DIR__.'/TestCaseBase.php';

PHPUnit_Framework_Error_Notice::$enabled = true;
