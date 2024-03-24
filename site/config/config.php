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
