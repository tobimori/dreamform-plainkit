<?php

use tobimori\DreamForm\Support\Menu;

return [
	// Debug mode (this should be disabled in production)
	'debug' => true,

	// Cache for speed ⚡
	'cache.pages' => [
		'active' => true
	],

	// Settings for the DreamForm plugin
	'tobimori.dreamform' => [
		// custom layouts in 12 column grid
		'layouts' => [
			'1/1',
			'1/2, 1/2',
			'1/3, 2/3',
			'2/3, 1/3'
		],

		// enable htmx
		'mode' => 'htmx',
		'guards' => [
			// disable csrf since we want to be sessionless
			// so that the page can be cached
			'available' => ['honeypot']
		],

		// encryption secret for htmx attributes
		'secret' => fn () => env('DREAMFORM_SECRET')
	],

	// Example email settings for Mailpit
	'email' => [
		'transport' => [
			'type' => 'smtp',
			'host' => 'localhost',
			'port' => 1025,
			'security' => false,
			'auth' => false,
			'username' => 'dreamform@andkindness.com',
			'password' => 'dreamform'
		]
	],

	// Custom menu to show forms in the panel sidebar
	'panel.menu' => fn () => [
		'site' => Menu::site(),
		'forms' => Menu::forms(),
		'users',
		'system'
	],
];
