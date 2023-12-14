<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function rhythm_form_system_theme_settings_alter(&$form, $form_state){
  $form['rhythm']['box'] = [
    '#type'=> 'details',
    '#title' => 'rhythm Box',
  ];
  $form['rhythm']['box']['rhythm_title'] = [
    '#type'=> 'textfield',
    '#title' => 'rhythm title',
    '#description' => t('Add Rhythm Title Here!'),
    '#default_value' => theme_get_setting('rhythm_title', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_description'] = [
    '#type'=> 'textarea',
    '#title' => 'rhythm description',
    '#description' => t('Add Rhythm Description Here!'),
    '#default_value' => theme_get_setting('rhythm_description', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_audio'] = [
    '#type'=> 'details',
    '#title' => 'rhythm_audio',
  ];
  $form['rhythm']['box']['rhythm_audio']['audio_url'] = [
    '#type'=> 'textfield',
    '#title' => 'audio url',
    '#description' => t('Allowed extensions: mp3'),
    '#upload_validators' => [
      'file_validate_extensions'  => ['mp3'],
    ],
    '#default_value' => theme_get_setting('audio_url', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_audio']['audio_width'] = [
    '#type'=> 'textfield',
    '#title' => 'audio width',
    '#default_value' => theme_get_setting('audio_width', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_audio']['audio_height'] = [
    '#type'=> 'textfield',
    '#title' => 'audio height',
    '#default_value' => theme_get_setting('audio_height', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_audio']['audio_scrolling'] = [
    '#type'=> 'textfield',
    '#title' => 'scrolling',
    '#default_value' => theme_get_setting('audio_scrolling', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_audio']['audio_frameborder'] = [
    '#type'=> 'textfield',
    '#title' => 'frameborder',
    '#default_value' => theme_get_setting('audio_frameborder', 'rhythm')
  ];
  $form['rhythm']['box']['playlist'] = [
    '#type'=> 'details',
    '#title' => 'playlist',
  ];
  $form['rhythm']['box']['playlist']['play'] = [
    '#type'=> 'textfield',
    '#title' => 'play',
    '#default_value' => theme_get_setting('play', 'rhythm')
  ];
  $form['rhythm']['box']['playlist']['playlist_url'] = [
    '#type'=> 'textfield',
    '#title' => 'playlist url',
    '#description' => t('Allowed extensions: mp3'),
    '#upload_validators' => [
      'file_validate_extensions'  => ['mp3'],
    ],
    '#default_value' => theme_get_setting('playlist_url', 'rhythm')
  ];
  $form['rhythm']['box']['playlist']['playlist_width'] = [
    '#type'=> 'textfield',
    '#title' => 'playlist width',
    '#default_value' => theme_get_setting('playlist_width', 'rhythm')
  ];
  $form['rhythm']['box']['playlist']['playlist_height'] = [
    '#type'=> 'textfield',
    '#title' => 'playlist height',
    '#default_value' => theme_get_setting('playlist_height', 'rhythm')
  ];
  $form['rhythm']['box']['playlist']['playlist_scrolling'] = [
    '#type'=> 'textfield',
    '#title' => 'playlist scrolling',
    '#default_value' => theme_get_setting('playlist_scrolling', 'rhythm')
  ];
  $form['rhythm']['box']['playlist']['playlist_frameborder'] = [
    '#type'=> 'textfield',
    '#title' => 'playlist frameborder',
    '#default_value' => theme_get_setting('playlist_frameborder', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm_image'] = [
    '#type'=> 'managed_file',
    '#title' => 'rhythm image',
    '#description' => t('Add Image!'),
    '#default_value' => theme_get_setting('rhythm_image', 'rhythm'),
    '#upload_location' => 'public://',
  ];
  $form['rhythm']['box']['copyright_text'] = [
    '#type'=> 'textfield',
    '#title' => 'rhythm copyright text',
    '#description' => t('Add Copyright Text Here!'),
    '#default_value' => theme_get_setting('copyright_text', 'rhythm')
  ];
  $form['rhythm']['box']['rhythm background images'] = [
    '#type'=> 'details',
    '#title' => 'rhythm background images',
  ];
  $form['rhythm']['box']['rhythm background images']['number_of_imgs'] = [
    '#type'=> 'number',
    '#title' => 'number of imgs',
    '#description' => t('Add bg_img Here!'),
    '#default_value' => theme_get_setting('number_of_imgs', 'rhythm'),
  ];
  for($i=1;$i<=theme_get_setting('number_of_imgs', 'rhythm');$i++){
    $form['rhythm']['box']['rhythm background images']['img' . $i] = [
      '#type'=> 'managed_file',
      '#title' => 'img' . $i,
      '#description' => t('Add bg_img Here!'),
      '#default_value' => theme_get_setting('img' . $i, 'rhythm'),
      '#upload_location' => 'public://',
    ];
  }
}