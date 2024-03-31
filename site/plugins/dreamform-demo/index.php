<?php

use Kirby\Cms\App;
use tobimori\DreamForm\DreamForm;

@include_once __DIR__ . '/LinkedInField.php';

DreamForm::register(LinkedInField::class);

App::plugin('tobimori/dreamform-demo', []);
