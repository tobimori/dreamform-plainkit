<?php snippet('layout', slots: true); ?>


<div class="max-w-3xl w-full bg-white py-12 my-10 rounded-lg shadow-sm">
  <div class="pb-12 mb-12 px-16 border-b border-gray-100">
    <h1 class="text-2xl font-medium mb-2"><?= $page->title() ?></h1>
    <p class="text-slate-600 leading-7"><?= $page->text() ?></p>
  </div>

  <div class="px-16">
    <?php snippet('dreamform/form', ['form' => $page->form()->toPage()]) ?>
  </div>
</div>