<?php

/**
 * @file
 * Post update functions for cmenergy.
 */

/**
 * Sets the default `base_primary_color` value of cmenergy's theme settings.
 */
function cmenergy_post_update_add_olivero_primary_color() {
  \Drupal::configFactory()->getEditable('cmenergy.settings')
    ->set('base_primary_color', '#1b9ae4')
    ->save();
}
