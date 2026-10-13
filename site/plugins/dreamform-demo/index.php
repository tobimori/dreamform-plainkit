<?php

use Kirby\Cms\App;

// Load the field class lazily, only when DreamForm needs it
load([
	'LinkedInField' => __DIR__ . '/LinkedInField.php',
]);

App::plugin('tobimori/dreamform-demo', [
	// Register the custom field with DreamForm
	'tobimori.dreamform.fields' => [
		LinkedInField::class,
	],
]);
