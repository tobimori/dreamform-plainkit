<?php

/** 
 * This is a basic layout snippet that renders the site scaffolding.
 * It is used as snippet with slots (https://www.youtube.com/watch?v=ASmy8mcBWqg).
 * */ ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $page->title() ?></title>
  <?= vite(['src/index.css', 'src/index.js']) ?>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen items-center">
  <?= $slot ?>
</body>

</html>