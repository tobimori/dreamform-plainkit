<?php

/**
 * This is the default template for all pages.
 */

snippet('layout', slots: true) ?>

<div class="max-w-3xl w-full bg-white dark:bg-gray-800 py-12 my-10 rounded-lg shadow-sm dark:shadow-gray-900">
  <?php /** Render title & text */ ?>
  <div class="pb-12 mb-12 px-16 border-b border-gray-100 dark:border-gray-700 last:mb-0 last:border-none">
    <h1 class="text-2xl font-medium mb-2 text-gray-900 dark:text-gray-100"><?= $page->title() ?></h1>
    <p class="text-slate-600 dark:text-slate-400 leading-7"><?= $page->text() ?></p>
  </div>

  <div class="px-16">
    <?php
    /* Render the form selected in the page */
    snippet('dreamform/form', [
      'form' => $page->form()->toPage(),
      'attr' => [
        'row' => ['class' => 'gap-4 mb-4'],
        'field' => ['class' => 'group flex flex-col items-start mb-4 last:mb-0'],
        'label' => ['class' => 'text-sm font-medium text-slate-600 dark:text-slate-400 mb-1'],
        'input' => ['class' => 'peer group-data-[has-error]:mb-2 shadow-sm group-data-[has-error]:border-red-500 w-full border border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 rounded p-2'],
        'button' => ['class' => 'ml-auto bg-indigo-600 dark:bg-indigo-700 text-white py-2 px-4 rounded shadow-sm hover:bg-indigo-800 dark:hover:bg-indigo-600 transition-colors duration-200'],
        'error' => ['class' => 'text-red-500 text-sm'],
        'radio' => [
          'label' => ['class' => 'text-sm font-medium text-slate-600 dark:text-slate-400 mb-2'],
          'input' => ['class' => 'w-4 rounded-full mr-2 shadow-sm border border-gray-200 dark:border-gray-600 dark:bg-gray-700'],
          'error' => ['class' => 'group-has-[:checked]:hidden text-red-500 text-sm'],
          'row' => ['class' => 'flex items-center mb-1 text-sm dark:text-gray-300'],
        ],
        'checkbox' =>  [
          'label' => ['class' => 'text-sm font-medium text-slate-600 dark:text-slate-400 mb-2'],
          'input' => ['class' => 'w-4 mr-2 shadow-sm border border-gray-200 dark:border-gray-600 dark:bg-gray-700 rounded'],
          'error' => ['class' => 'group-has-[:checked]:hidden text-red-500 text-sm'],
          'row' => ['class' => 'flex items-center mb-1 text-sm dark:text-gray-300'],
        ],
        'file' => [
          'input' => ['class' => 'mt-1 w-full border border-gray-200 dark:border-gray-600 group-data-[has-error]:mb-2 group-data-[has-error]:border-red-500 text-gray-600 dark:text-gray-400 dark:bg-gray-700 shadow-sm rounded file:cursor-pointer file:transition-colors file:bg-gray-100 dark:file:bg-gray-600 file:border-0 file:mr-3 file:py-2 file:px-4 file:hover:bg-gray-200 dark:file:hover:bg-gray-500 dark:file:text-gray-200'],
          'row' => ['class' => 'flex items-center mb-1 text-sm dark:text-gray-300'],
        ]
      ]
    ]); ?>
  </div>
</div>

<?php endsnippet() ?>