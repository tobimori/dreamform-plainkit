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

  <script src="https://unpkg.com/htmx.org@1.9.11" integrity="sha384-0gxUXCCR8yv9FM2b+U3FDbsKthCI66oH5IA9fHppQq9DDMHuMauqq1ZHBpJxQ0J0" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen items-center">
  <?= $slot ?>
</body>

</html>