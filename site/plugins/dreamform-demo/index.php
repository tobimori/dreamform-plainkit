<?php

use Kirby\Cms\App;

load([
	'LinkedInField' => __DIR__ . '/LinkedInField.php',
]);

App::plugin('tobimori/dreamform-demo', [
	'tobimori.dreamform.fields' => [
		LinkedInField::class,
	],
]);
