<?php

namespace Drupal\ebt_countdown\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget;

/**
 * Plugin implementation of the 'ebt_settings_countdown' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_countdown",
 *   label = @Translation("EBT Countdown settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsCountDownWidget extends EbtSettingsDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['ebt_settings']['pass_options_to_javascript'] = [
      '#type' => 'hidden',
      '#value' => TRUE,
    ];

    $element['ebt_settings']['color_theme'] = [
      '#title' => $this->t('Color theme'),
      '#type' => 'radios',
      '#options' => [
        'dark' => $this->t('Dark'),
        'light' => $this->t('Light'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['color_theme'] ?? 'dark',
      '#description' => $this->t('Select color theme for countdown'),
      '#weight' => '3',
    ];

    $element['ebt_settings']['styles'] = [
      '#title' => $this->t('Styles'),
      '#type' => 'radios',
      '#options' => [
        'default' => $this->t('Default'),
        'new_year' => $this->t('New Year'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['styles'] ?? 'default',
      '#description' => $this->t('Select special style for countdown'),
      '#weight' => '4',
    ];

    $element['ebt_settings']['heading_days'] = [
      '#title' => $this->t('Heading Days'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['heading_days'] ?? $this->t('Days'),
      '#description' => $this->t('Header for Days counter'),
      '#weight' => '5',
    ];

    $element['ebt_settings']['heading_hours'] = [
      '#title' => $this->t('Heading Hours'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['heading_hours'] ?? $this->t('Hours'),
      '#description' => $this->t('Header for Hours counter'),
      '#weight' => '6',
    ];

    $element['ebt_settings']['heading_minutes'] = [
      '#title' => $this->t('Heading Minutes'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['heading_minutes'] ?? $this->t('Minutes'),
      '#description' => $this->t('Header for Minutes counter'),
      '#weight' => '7',
    ];

    $element['ebt_settings']['heading_seconds'] = [
      '#title' => $this->t('Heading Seconds'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['heading_seconds'] ?? $this->t('Seconds'),
      '#description' => $this->t('Header for Seconds counter'),
      '#weight' => '8',
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    foreach ($values as &$value) {
      $value += ['ebt_settings' => []];
    }
    return $values;
  }

}
