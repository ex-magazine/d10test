/**
 * @file
 * GLightbox Media Video integration.
 */

(function($) {
  Drupal.behaviors.glightboxMediaVideo = {
    attach: function (context, settings) {
      var lightboxVideo = GLightbox({
        selector: '.glightbox-media-video'
      });

      lightboxVideo.on('slide_changed', ({ prev, current }) => {
        // console.log('Prev slide', prev);
        // console.log('Current slide', current);

        const { slideIndex, slideNode, slideConfig, player } = current;

        if (player) {
          if (!player.ready) {
            // If player is not ready.
            player.on('ready', (event) => {
              // Do something when video is ready.
            });
          }

          player.on('play', (event) => {
            // console.log('Started play');
          });

          player.on('volumechange', (event) => {
            // console.log('Volume change');
          });

          player.on('ended', (event) => {
            // console.log('Video ended');
          });
        }
      });
    }
  };
})(jQuery);
