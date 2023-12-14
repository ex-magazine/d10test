(function ($, Drupal) {

  /**
   * EBT Countdown behavior.
   */
  Drupal.behaviors.ebtCountDown = {
    attach: function (context, settings) {
      var countdowns = once('ebt-countdown-block', '.ebt-countdown-date', context);
      countdowns.forEach(function(countdown) {
        // Get block ID.
        var countdownWrapper = countdown.closest('.ebt-block-countdown');
        var countdownWrapperId = countdownWrapper.getAttribute('id');
        // Get block EBT settings.
        var ebtOptions = drupalSettings['ebtCountdown'][countdownWrapperId];
        // Prepare options for javascript plugin.
        var countdownTimestamp = parseInt(countdown.getAttribute('data-date'));
        var countdownId = countdown.getAttribute('id');
        // Init javascript plugin.
        new FlipDown(countdownTimestamp, countdownId, {
          theme: ebtOptions['options']['color_theme'],
          headings: [
            ebtOptions['options']['heading_days'],
            ebtOptions['options']['heading_hours'],
            ebtOptions['options']['heading_minutes'],
            ebtOptions['options']['heading_seconds'],
          ],
        }).start();
      });
    }
  }

})(jQuery, Drupal);
