<?php

/**
 * @file
 * Preprocess function for this hook.
 */

/**
 * Implements hook_preprocess_menu__REGION().
 *
 * This made possible by our custom theme suggestion.
 *
 * @see uswds_base_theme_suggestions_block_alter()
 */
function uswds_base_preprocess_menu__footer_menu(&$variables) {

  $variables['footer_style'] = theme_get_setting('uswds_footer_style');
}
