<?php

/**
 * This is a custom success snippet, shown after the last step of the form.
 * You can override all of DreamForm's snippets by placing a file with
 * the same name in your /site/snippets/dreamform folder.
 *
 * @var \tobimori\DreamForm\Models\SubmissionPage $submission
 * @var \tobimori\DreamForm\Models\FormPage $form
 * @var array $attr
 */

use Kirby\Toolkit\A;

?>
<div <?= attr(A::merge($attr['success'], ['id' => $form->elementId()])) ?>>
	<strong>Thank you, <?= $submission->valueFor('first-name')->escape() ?>!</strong>
	<p>We received your application.</p>
	<p><small>(This is a custom success snippet. You can override all the default snippets in your Kirby site.)</small></p>
</div>
