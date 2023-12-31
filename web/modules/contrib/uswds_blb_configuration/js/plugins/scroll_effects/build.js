/**
 * @file
 * Behaviors of Boostrap Layout Builder local video background.
 */

(function ($, _, Drupal, drupalSettings) {
  Drupal.behaviors.scrollEffectsInit = {
    attach: function (context, settings) {
      AOS.init();
    }
  };

})(window.jQuery, window._, window.Drupal, window.drupalSettings);
