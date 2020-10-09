<?php

require(__DIR__.'/../vendor/autoload.php');

$fw = Base::instance();

//$fw->set('sandwich', 'blt', 300);
$fw->sandwich = 'blt';
$fw->people = [ 'bob', 'joe', 'sam' ];
$sandwich_bread = 'white';

$fw->AUTOLOAD = '../controllers/';
$fw->DEBUG = 3;
$fw->JAR = [
	'expires' => time() + 500
];

$fw->route('GET /@name', 'Index_Controller->index');
$fw->run();