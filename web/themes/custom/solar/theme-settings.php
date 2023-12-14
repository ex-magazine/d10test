<?php

/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for solar theme.
*/


/**
 * Implements hook_form_FORM_ID_alter().
 */

function solar_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id = NULL) {

    if (isset($form_id)) {
        return;
    }

    $form['solar_settings']['social'] = [
      '#type' => 'details',
      '#title' => t('Social And Contact Setting'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
      
    $form['solar_settings']['social']['twitter'] = [
      '#type'          => 'textfield',
      '#title'         => t('Twitter'),
      '#default_value' => theme_get_setting('twitter'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
  
    $form['solar_settings']['social']['facebook'] = [
      '#type'          => 'textfield',
      '#title'         => t('Facebook'),
      '#default_value' => theme_get_setting('facebook'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
  
    $form['solar_settings']['social']['instagram'] = [
      '#type'          => 'textfield',
      '#title'         => t('Instagram'),
      '#default_value' => theme_get_setting('instagram'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];

    $form['solar_settings']['social']['youtube'] = [
      '#type'          => 'textfield',
      '#title'         => t('Youtube'),
      '#default_value' => theme_get_setting('youtube'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['solar_settings']['social']['linkedin'] = [
      '#type'          => 'textfield',
      '#title'         => t('Linkedin'),
      '#default_value' => theme_get_setting('linkedin'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['solar_settings']['social']['phone'] = [
      '#type'          => 'textfield',
      '#title'         => t('Phone'),
      '#default_value' => theme_get_setting('phone'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['solar_settings']['social']['email'] = [
      '#type'          => 'textfield',
      '#title'         => t('Email'),
      '#default_value' => theme_get_setting('email'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['solar_settings']['social']['address'] = [
      '#type'          => 'textarea',
      '#title'         => t('Address'),
      '#default_value' => theme_get_setting('address'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['solar_settings']['social']['management_message'] = [
      '#type'          => 'textarea',
      '#title'         => t('Management Message'),
      '#default_value' => theme_get_setting('management_message'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];

}

?>