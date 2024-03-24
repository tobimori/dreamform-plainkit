<h1><?= $page->title() ?></h1>

<?php snippet(
  'dreamform/form',
  ['form' => page('forms/lorem-ipsum')]
) ?>