<?php

/**
 * @var \tobimori\DreamForm\Models\Submission|null $submission
 *
 * @var \Kirby\Cms\Block $block
 * @var \LinkedInField $field
 * @var \tobimori\DreamForm\Models\FormPage $form
 * @var array $attr
 */

snippet('dreamform/fields/text', [
  'block' => $block,
  'field' => $field,
  'form' => $form,
  'attr' => $attr,
  'type' => 'url'
]);
