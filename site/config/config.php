<?php

use tobimori\DreamForm\Support\Menu;

return [
  // Debug mode (this should be disabled in production)
  'debug' => true,
  'cache.pages' => [
    'active' => true
  ],

  // Settings for the DreamForm plugin
  'tobimori.dreamform' => [
    'mode' => 'htmx',
    'guards' => [
      // disable csrf since we want to be sessionless
      // so that the page can be cached
      'available' => ['honeypot']
    ],
    'secret' => fn () => env('DREAMFORM_SECRET')
  ],

  // Custom menu to show forms in the panel sidebar
  'panel.menu' => fn () => [
    'site' => Menu::site(),
    'forms' => Menu::forms(),
    'users',
    'system'
  ],

  // Necessary for Vite bundling
  'lukaskleinschmidt.laravel-vite' => [
    'hotFile' => 'vite.hot',
    'buildDirectory' => 'dist'
  ],
];
