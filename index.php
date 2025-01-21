<?php


$f3 = require('lib/vendor/bcosca/fatfree-core/base.php');

$f3->set('DEBUG', 3);
if ((float)PCRE_VERSION < 8.0)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config/config.ini');
$f3->config('config/routes.ini');


$f3->run();
