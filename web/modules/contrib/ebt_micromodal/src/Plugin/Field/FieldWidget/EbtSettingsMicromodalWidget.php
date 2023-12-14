<?php

namespace Drupal\ebt_micromodal\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget;

/**
 * Plugin implementation of the 'ebt_settings_micromodal' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_micromodal",
 *   label = @Translation("EBT Micromodal settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsMicromodalWidget extends EbtSettingsDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['ebt_settings']['pass_options_to_javascript'] = [
      '#type' => 'hidden',
      '#value' => TRUE,
    ];

    $element['ebt_settings']['button_text'] = [
      '#title' => $this->t('Button text'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['button_text'] ?? $this->t('Open'),
      '#description' => $this->t('Text for micromodal button.'),
    ];

    $element['ebt_settings']['disable_scroll'] = [
      '#title' => $this->t('Disable scroll'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['disable_scroll'] ?? NULL,
      '#description' => $this->t('This disables scrolling on the page while the modal is open. The default value is false'),
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
