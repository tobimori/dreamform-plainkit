<?php

/**
 * This is the default template for all pages.
 *
 * @var \Kirby\Cms\Page $page
 */

snippet('layout', slots: true) ?>

<?php /** Render title & text */ ?>
<header class="header">
	<h1><?= $page->title()->escape() ?></h1>
	<a class="button button-dimmed" href="<?= $kirby->url('panel') ?>">Open Panel</a>
</header>
<p class="text"><?= $page->text() ?></p>

<?php
/**
 * Render the form selected in the page.
 *
 * The attr array attaches classes to DreamForm's markup,
 * they are defined in /assets/css/site.css
 */
$choices = [
	'field' => ['class' => 'field field-choices'],
	'input' => ['class' => 'choice-input'],
	'row' => ['class' => 'choice'], // wraps each option
	'value' => ['class' => 'choice-label'], // label of each option
];

snippet('dreamform/form', [
	'form' => $page->form()->toPage(),
	'attr' => [
		'form' => ['class' => 'form'],
		'row' => ['class' => 'form-row'],
		'column' => ['class' => 'form-column'],
		'field' => ['class' => 'field'],
		'label' => ['class' => 'field-label'],
		'error' => ['class' => 'field-error'],
		'input' => ['class' => 'input'],
		'button' => ['class' => 'button button-positive'],
		'success' => ['class' => 'box box-positive'],
		'inactive' => ['class' => 'box'],
		'radio' => $choices,
		'checkbox' => $choices,
	]
]);

endsnippet();
