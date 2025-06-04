<?php

use Kirby\Cms\App;

define('KIRBY_HELPER_DUMP', false);

require __DIR__ . '/vendor/getkirby/cms/bootstrap.php';
require __DIR__ . '/vendor/autoload.php';

echo (new App([
	'roots' => [
		// custom roots here because we're installing kirby in the vendor folder
		'index' => __DIR__
	]
]))->render();
