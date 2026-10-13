<?php

/**
 * This is a basic layout snippet that renders the site scaffolding.
 * It is used as snippet with slots (https://getkirby.com/docs/guide/templates/snippets#passing-slots-to-snippets).
 *
 * @var \Kirby\Cms\Page $page
 * @var \Kirby\Cms\Site $site
 */ ?>
<!DOCTYPE html>
<html lang="<?= $kirby->language()?->code() ?? 'en' ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="color-scheme" content="light dark">
	<title><?= $page->title()->escape() ?> | <?= $site->title()->escape() ?></title>

	<?= css('assets/css/site.css') ?>

	<?php /* HTMX progressively enhances the form, its built-in morphing keeps focus during live validation (precognition) */ ?>
	<script src="https://unpkg.com/htmx.org@4.0.0/dist/htmx.min.js" integrity="sha384-BvJpBiO8Kh31EqtJe5DRIeWrHWnCGkwytKs9NKFi86Hhw96dEqdEMzZDeK9iEGTc" crossorigin="anonymous"></script>
</head>

<body>
	<main class="view">
		<?= $slot ?>
	</main>
</body>

</html>
