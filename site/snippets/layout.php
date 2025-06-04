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

	<script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/idiomorph@0.7.3/dist/idiomorph-ext.min.js" integrity="sha256-FYn0JWCGU6hB+gbvK7EDpZ4Z8ebScGTP+JTTZe/W2Ug=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<script>
		htmx.logAll()
	</script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen items-center">
	<?= $slot ?>
</body>

</html>