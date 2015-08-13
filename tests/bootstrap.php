<?php
error_reporting(E_ALL);

include_once dirname(__DIR__).'/src/autoloader.php';
include_once __DIR__.'/TestCaseBase.php';

PHPUnit_Framework_Error_Notice::$enabled = true;
