<?php

use Kirby\Cms\App;

define('KIRBY_HELPER_DUMP', false);

require 'kirby/bootstrap.php';

echo (new App())->render();
