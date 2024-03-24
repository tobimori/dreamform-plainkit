<?php

use tobimori\DreamForm\Menu;

return [
  'debug' => true,
  'panel.menu' => fn () => [
    'site' => Menu::site(),
    'forms' => Menu::forms(),
    'users',
    'system'
  ],
  'lukaskleinschmidt.laravel-vite' => [
    'hotFile' => 'vite.hot',
    'buildDirectory' => 'dist'
  ],
];
