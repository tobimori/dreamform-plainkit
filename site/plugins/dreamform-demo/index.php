<?php

use Kirby\Cms\App;
use Kirby\Toolkit\Str;
use tobimori\DreamForm\DreamForm;
use tobimori\DreamForm\Fields\Field;

class LinkedInField extends Field
{
  public static function blueprint(): array
  {
    return [
      'title' => 'LinkedIn',
      'label' => '{{ label }}',
      'preview' => 'fields',
      'wysiwyg' => true,
      'icon' => 'linkedin',
      'tabs' => [
        'field' => [
          'label' => t('dreamform.field'),
          'fields' => [
            'key' => 'dreamform/fields/key',
            'label' => 'dreamform/fields/label',
            'placeholder' => 'dreamform/fields/placeholder',
          ]
        ],
        'validation' => [
          'label' => t('dreamform.validation'),
          'fields' => [
            'required' => 'dreamform/fields/required',
            'errorMessage' => 'dreamform/fields/error-message',
          ]
        ]
      ]
    ];
  }

  public function submissionBlueprint(): array|null
  {
    return [
      'label' => $this->block()->label()->value() ?? 'LinkedIn',
      'icon' => 'linkedin',
      'type' => 'text'
    ];
  }

  public function validate(): true|string
  {
    if (
      $this->block()->required()->toBool()
      && $this->value()->isEmpty() ||
      // Regex match to check if the value is a valid LinkedIn URL
      // https://stackoverflow.com/a/33760587/12168767
      !Str::match($this->value(), "/http(s)?:\/\/([\w]+\.)?linkedin\.com\/in\/[A-z0-9_-]+\/?/")
    ) {
      return $this->errorMessage();
    }

    return true;
  }

  public static function group(): string
  {
    return 'social';
  }

  public static function type(): string
  {
    return 'linkedin';
  }
}

DreamForm::register(LinkedInField::class);

App::plugin('tobimori/dreamform-demo', []);
