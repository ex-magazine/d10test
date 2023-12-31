<?php

/**
 * @file
 * Hook THEME_preprocess_links_*.
 */

/**
 * Implements hook_preprocess_links().
 */
function bootstrap_italia_preprocess_links(array &$variables): void {
  // Add current language to block.
  $variables['current_language'] = \Drupal::languageManager()->getCurrentLanguage()->getId();
  $variables['links_type'] = $variables['theme_hook_original'];
}
