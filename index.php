<?php

use Kirby\Cms\App;

define('KIRBY_HELPER_DUMP', false);

require 'vendor/getkirby/cms/bootstrap.php';

echo (new App())->render();
