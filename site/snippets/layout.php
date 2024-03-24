<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?= vite(['src/index.css', 'src/index.js']) ?>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen items-center">
  <?= $slot ?>
</body>

</html>