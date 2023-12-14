(function (Drupal) {

  /**
   * EBT Micromodal behavior.
   */
  Drupal.behaviors.ebtMicromodal = {
    attach: function (context, settings) {
      var micromodals = once('ebt-micromodal-block-once', '.ebt-micromodal-block', context);
      micromodals.forEach(function(el) {
        MicroModal.init({
          disableScroll: drupalSettings['ebtMicromodal'][el.getAttribute('id')]['options']['disable_scroll'],
        });
      });

    }
  };

})(Drupal);
