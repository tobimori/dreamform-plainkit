<?php

use tobimori\DreamForm\Support\Menu;

return [
	// Debug mode (this should be disabled in production)
	'debug' => true,

	// Cache for speed ⚡
	'cache.pages' => [
		'active' => true
	],

	// Kirby's content salt, loaded from the .env file
	// DreamForm derives the secret for encrypting HTMX attributes from it
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

		// Enable HTMX 4 Mode with live validation while typing
		'mode' => 'htmx',
		'htmx' => [
			'version' => 4
		],
		'precognition' => true,

		// Only render error elements when there is an error to show
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
