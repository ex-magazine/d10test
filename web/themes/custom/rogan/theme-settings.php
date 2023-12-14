<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function rogan_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
  $form['st_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Rogan Theme Settings'),
        '#collapsible' => true,
        '#collapsed' => true,
    );


  // Menu sticky option
  $form['st_settings']['tabs']['theme_menu_config']['menu_sticky'] = array(
    '#type' => 'checkbox',
    '#title' => t('Menu sticky'),
    '#default_value' => theme_get_setting('menu_sticky','rogan'),
	'#description' => 'Make the menu sticky',
  );
  
}

