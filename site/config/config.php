<?php

use tobimori\DreamForm\Support\Menu;

return [
	// Debug mode (this should be disabled in production)
	'debug' => true,

	// Cache for speed ⚡
	'cache.pages' => [
		'active' => true
	],

	// content salt, also used as encryption secret for htmx attributes
	'content' => [
		'salt' => fn () => env('CONTENT_SALT')
	],

	// Settings for the DreamForm plugin
	'tobimori.dreamform' => [
		// Custom layouts in 12 column grid
		'layouts' => [
			'1/1',
			'1/2, 1/2',
			'1/3, 2/3',
			'2/3, 1/3'
		],

		// Enable HTMX 4 Mode
		'mode' => 'htmx',
		'htmx' => [
			'version' => 4
		],
		'precognition' => true,
		'hideEmptyErrors' => true,

		'guards' => [
			// Disable CSRF since we want to be sessionless
			// So that the page can be cached
			'available' => ['honeypot']
		]
	],

	// Example email settings for Mailpit
	// For local development, we're using Mailpit as email server
	// For production, you should use a real email server
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

	// Custom panel menu to show forms in the panel sidebar
	'panel.menu' => fn () => [
		'site' => Menu::site(),
		'forms' => Menu::forms(),
		'users',
		'system'
	],
];
