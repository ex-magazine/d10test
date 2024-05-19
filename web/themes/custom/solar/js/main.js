/*=== Javascript function indexing hear===========

1.counterUp ----------(Its use for counting number)
2.stickyHeader -------(header class sticky)
3.wowActive ----------( Waw js plugins activation)
4.swiperJs -----------(All swiper in this website hear)
5.salActive ----------(Sal animation for card and all text)
6.textChanger --------(Text flip for banner section)
7.timeLine -----------(History Time line)
8.datePicker ---------(On click date calender)
9.timePicker ---------(On click time picker)
10.timeLineStory -----(History page time line)
11.vedioActivation----(Vedio activation)
12.searchOption ------(search open)
13.cartBarshow -------(Cart sode bar)
14.sideMenu ----------(Open side menu for desktop)
15.Back to top -------(back to top)
16.filterPrice -------(Price filtering)

==================================================*/

(function ($) {
  'use strict';

  var drJs = {
      m: function (e) {
          drJs.d();
          drJs.methods();
      },
      d: function (e) {
          this._window = $(window),
          this._document = $(document),
          this._body = $('body'),
          this._html = $('html')
      },
      methods: function (e) {
          drJs.wowActive();
          drJs.swiperActivation();
          drJs.wowActive();
          drJs.counterUp();
          drJs.stickyHeader();
          drJs.searchOption();
          drJs.metismenu();
          drJs.sideMenu();
          drJs.datePicker();
          drJs.timePicker();
          drJs.imageSlideGsap();
          drJs.vedioActivation(); 
          drJs.galleryPopUp(); 
          drJs.backToTopInit(); 
          drJs.progressAvtivation(); 
          drJs.gsapTextanim(); 
          drJs.smoothScroll(); 
          drJs.preloader();           
          drJs.cartNumberIncDec(); 
          drJs.cartBarshow(); 

      },
      
      wowActive: function () {
        new WOW().init();
      },

      // swiper js activation
      swiperActivation: function (e) {
        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-banner", {
            spaceBetween: 0,
            loop: true,
            hashNavigation: {
              watchState: true,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            autoplay: {
              delay: 7000,
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-about-feedback", {
            spaceBetween: 0,
            loop: true,
            hashNavigation: {
              watchState: true,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            autoplay: {
              delay: 2000,
            },
          });
        });
        
        $(document).ready(function () {
          var swiper = new Swiper(".project-details-carousel", {
            spaceBetween: 0,
            loop: true,
            hashNavigation: {
              watchState: true,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            autoplay: {
              delay: 2000,
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".aircondition-testimonials", {
            spaceBetween: 0,
            loop: true,
            hashNavigation: {
              watchState: true,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            autoplay: {
              delay: 2000,
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".project-home-one", {
            slidesPerView: 5,
            spaceBetween: 10,
            slidesPerGroup: 1,
            // centeredSlides: true,
            // centeredSlides: true,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              1500: {
                slidesPerView: 4,
              },
              1199: {
                slidesPerView:3,
              },
              991: {
                slidesPerView: 3,
              },
              767: {
                slidesPerView: 2,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-product-6", {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 1,
            // centeredSlides: true,
            // centeredSlides: true,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              1500: {
                slidesPerView: 4,
              },
              1199: {
                slidesPerView:3,
              },
              991: {
                slidesPerView: 3,
              },
              767: {
                slidesPerView: 2,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-h1-solari-product", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            // centeredSlides: true,
            // centeredSlides: true,
            loop: true,
            autoplay: {
              delay: 2500,
            },
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              1500: {
                slidesPerView: 3,
              },
              1199: {
                slidesPerView:3,
              },
              991: {
                slidesPerView: 2,
              },
              767: {
                slidesPerView: 1,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".team-swiper-ac", {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              1500: {
                slidesPerView: 4,
              },
              1199: {
                slidesPerView:3,
              },
              991: {
                slidesPerView: 3,
              },
              767: {
                slidesPerView: 2,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".case-swiper-ac", {
            slidesPerView: 1.8,
            spaceBetween: 24,
            slidesPerGroup: 1,
            centeredSlides: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              1500: {
                slidesPerView: 1.8,
              },
              1199: {
                slidesPerView:1.8,
              },
              991: {
                slidesPerView: 2,
              },
              767: {
                slidesPerView: 1,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".swiper-feedback-solar", {
            slidesPerView: 2,
            spaceBetween: 24,
            slidesPerGroup: 1,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              1500: {
                slidesPerView:2,
              },
              1199: {
                slidesPerView:2,
              },
              991: {
                slidesPerView: 1,
              },
              767: {
                slidesPerView: 1,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-h-2-c", {
            slidesPerView: 3.8,
            spaceBetween: 24,
            slidesPerGroup: 1,
            centeredSlides: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination-h2-c",
              clickable: true,
            },
            breakpoints: {
              1500: {
                slidesPerView: 3,
              },
              1199: {
                slidesPerView:2,
              },
              991: {
                slidesPerView: 2,
              },
              767: {
                slidesPerView: 1,
                spaceBetween: 30,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });

        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-h-2-cl", {
            slidesPerView: 5,
            spaceBetween: 24,
            slidesPerGroup: 1,
            centeredSlides: true,            
            // effect: 'coverflow',
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: true,
            // pagination: {
            //   el: ".swiper-pagination-h2-cl",
            //   clickable: true,
            // },
            breakpoints: {
              1500: {
                slidesPerView: 5,
              },
              1199: {
                slidesPerView:4,
              },
              991: {
                slidesPerView: 3,
              },
              767: {
                slidesPerView: 3,
                spaceBetween: 0,
              },
              575: {
                slidesPerView: 1,
                spaceBetween: 24,                  
              },
              0: {
                slidesPerView: 1,
                spaceBetween: 0,
              }
            },
          });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".mySwiper-h3-project", {
            slidesPerView: 3.6,
            spaceBetween: 24,
            slidesPerGroup: 1,
            centeredSlides:false,
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: false,
            breakpoints: {
              1500: {
                slidesPerView: 3,
              },
              1199: {
                slidesPerView: 3,
              },
              991: {
                slidesPerView: 3,
              },
              767: {
                slidesPerView: 2,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });

        $(document).ready(function(){        
          /*
          var mySwiper = new Swiper ('.mySwiper-banner-2', {             
            direction: 'horizontal',
            loop: false,            
            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },              
            on: {
              transitionStart: function(){                  
                var videos = document.querySelectorAll('video');            
                Array.prototype.forEach.call(videos, function(video){
                  video.pause();
                });
              },                
              transitionEnd: function(){                  
                var activeIndex = this.activeIndex;
                var activeSlide = document.getElementsByClassName('swiper-slide')[activeIndex];
                var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
                activeSlideVideo.play();                
              },              
            }
          })
          
          */

          
          /*
          var swiper = new Swiper(".mySwiper-banner-2", {
            pagination: {
              el: ".swiper-pagination-b2",
              clickable: true
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            effect: 'slide',
            loop: true,
            autoplay: {
              delay: 5000,
            },
          });
          */

        if ($("#block-solar-views-block-banner-block-1").hasClass("block-views-blockbanner-block-1")) {   
          // variable 
          var VIDEO_PLAYING_STATE = {
            "PLAYING": "PLAYING",
            "PAUSE": "PAUSE"
          };
          var videoPlayStatus = VIDEO_PLAYING_STATE.PAUSE;
          var timeout = null;
          var waiting = 10000;
          var swiper = new Swiper(
            '.mySwiper-banner-2', {
            pagination: {
              el: ".swiper-pagination-b2",
              clickable: true
            },
            effect: 'slide',   
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            on: {
              init: function () {
                console.log('swiper initialized', this.realIndex);
                var currentVideo =  $("[data-slide-type=vdo]").find("video");
                currentVideo.trigger('play');
              },
            },
          });

          // HTML5 vdo object          

          var options = {};
          var player = videojs('my-player', options);
          player.on('ended', function() {  
            swiper.slideNext();  
          })
          // swiper object
         
          swiper.on('slideChangeTransitionEnd', function () {
            
            var index = swiper.activeIndex
            var currentSlide =   $(swiper.slides[index])
            var currentSlideType = currentSlide.data('slide-type')
            
            // incase user click next before video ended
            if (videoPlayStatus === VIDEO_PLAYING_STATE.PLAYING) {
              player.pause()
            }
            
            clearTimeout(timeout)
            
            switch (currentSlideType) {
              case 'img':
                runNext()
                break;
              case 'vdo':
                player.currentTime(0)                
                player.play()
                videoPlayStatus = VIDEO_PLAYING_STATE.PLAYING
                break;
              default:
                throw new Error('invalid slide type');
            }
          })

          // global function
          function prev() {
            swiper.slidePrev();
          }

          function next() {
            swiper.slideNext();  
          }

          function runNext() {  
            timeout = setTimeout(function () {
              next()
            }, waiting)
          }
       
          // $('.video-overlay').click(function() {
          //   if (player.paused())
          //     player.play();
          //   else
          //     player.pause();
          // });
  
          runNext();

        }

        });
        // variable 
        $(document).ready(function(){
          var swiper = new Swiper(".mySwiper-testimonials-solari", {
            pagination: {
              el: ".swiper-pagination",
              clickable: true
            },
            loop: true,
            autoplay: {
              delay: 3000,
            },
          });
        });

        $(document).ready(function(){
          var swiper = new Swiper(".mySwiper-banener-four-water", {
            speed: 500,
            effect: 'fade',
            pagination: {
              el: ".swiper-pagination",
              clickable: true
            },
            loop: true,
            autoplay: {
              delay: 5000,
            },
          });
        });
        
        $(document).ready(function(){
          var swiper = new Swiper(".mySwiper-category-soalr", {
            slidesPerView: 4,
            spaceBetween: 24,
            slidesPerGroup: 1,
            centeredSlides:false,
            mousewheel: {
              invert: true,
              releaseOnEdges: true
            },
            loop: true,
            autoplay: {
              delay: 3000,
            },
            loopFillGroupWithBlank: false,
            pagination: {
              el: ".swiper-pagination",
              type: "progressbar",
            },
            breakpoints: {
              1500: {
                slidesPerView: 3,
              },
              1199: {
                slidesPerView: 2,
              },
              991: {
                slidesPerView: 3,
              },
              767: {
                slidesPerView: 2,
              },
              575: {
                slidesPerView: 1,
              },
              0: {
                slidesPerView: 1,
              }
            },
          });
        });

        $(document).ready(function(){
            var swiper = new Swiper(".swiper-container-h1", {
                direction: "horizontal",
                effect: "slide",
                autoplay: false,
                parallax: true,
                speed: 1600,
                rtl: true,
                loop: true,
                loopFillGroupWithBlank: !0,
                keyboard: {
                  enabled: true,
                  onlyInViewport: true
                },
                scrollbar: {
                  el: ".swiper-scrollbar",
                  hide: false,
                  draggable: true
                },
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    type: "bullets",
                    clickable:"true"
                  }
              });
        });


      },

      // waw js activation
      wowActive: function () {
        new WOW().init();
      },

      // counter up
      counterUp: function (e) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
          });
          $('.counter').addClass('animated');
          $('h3').addClass('animated fadeIn');
      },

      // sticky header activation
      stickyHeader: function (e) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('.header--sticky').addClass('sticky')
            } else {
                $('.header--sticky').removeClass('sticky')
            }
        })
      },

      // search popup
      searchOption: function () {
        $(document).on('click', '#search', function () {
          $(".search-input-area").addClass("show");
          $("#anywhere-home").addClass("bgshow");
        });
        $(document).on('click', '#close', function () {
          $(".search-input-area").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '#anywhere-home', function () {
          $(".search-input-area").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
      },

      metismenu:function(){
        $('#mobile-menu-active').metisMenu();
      },
      // side menu desktop
      sideMenu:function(){
        $(document).on('click', '#menu-btn', function () {
          $("#side-bar").addClass("show");
          $("#anywhere-home").addClass("bgshow");
        });
        $(document).on('click', '.close-icon-menu', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '#anywhere-home', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '.onepage .mainmenu li a', function () {
          $("#side-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
      },

      // date picker
      datePicker: function () {
        jQuery(document).ready(function () {
          jQuery('#datepicker').datepicker({
              format: 'dd-mm-yyyy',
              startDate: '+1d'
          });
        });
      },

      // time picker
      timePicker: function () {
        $(function() {
          $('#timepicker').timepicker({
            //timeFormat: 'h:mm p',
            dynamic: false,
            dropdown: true,
            scrollbar: true
          });
        });
      },

      // image slide gsap
      imageSlideGsap: function () {
        $(document).ready(function(){
          gsap.to(".images", {
            scrollTrigger:{
              // trigger: ".images",
              start: "top bottom", 
              end: "bottom top", 
              scrub: 1,
              // markers: true
            },
            x: -250,
          })
        });
        $(document).ready(function(){
          gsap.to(".images-r", {
            scrollTrigger:{
              // trigger: ".images",
              start: "top bottom", 
              end: "bottom top", 
              scrub: 1,
              // markers: true
            },
            x: 250,
          })
        });
        $(document).ready(function(){
          gsap.to(".images-2", {
            scrollTrigger:{
              // trigger: ".images",
              start: "top bottom", 
              end: "bottom top", 
              scrub: 1,
              // markers: true
            },
            y: -290,
          })
        });
      },

      vedioActivation: function (e) {
        $('#play-video, .play-video').on('click', function (e) {
            e.preventDefault();
            let youtube_code = document.querySelector('#youtube-embed');
            $('.video-overlay').addClass('open');
            $(".video-overlay").append(youtube_code.innerHTML);
        });
        $('.play-video-second').on('click', function (e) {
          e.preventDefault();
          let youtube_code = document.querySelector('#youtube-embed-tab-second');
          $('.video-overlay').addClass('open');
          $(".video-overlay").append(youtube_code.innerHTML);
       });
        $('.video-overlay, .video-overlay-close').on('click', function (e) {
            e.preventDefault();
            close_video();
        });

        $(document).keyup(function (e) {
            if (e.keyCode === 27) {
                close_video();
            }
        });

        function close_video() {
            $('.video-overlay.open').removeClass('open').find('iframe').remove();
        };
      },
      galleryPopUp: function (e) {
          // Gallery image hover
          $( ".img-wrapper" ).hover(
            function() {
              $(this).find(".img-overlay").animate({opacity: 1}, 600);
            }, function() {
              $(this).find(".img-overlay").animate({opacity: 0}, 600);
            }
          );

          // Lightbox
          var $overlay = $('<div id="overlay"></div>');
          var $image = $("<img>");
          var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
          var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
          var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

          // Add overlay
          $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
          $("#gallery").append($overlay);

          // Hide overlay on default
          $overlay.hide();

          // When an image is clicked
          $(".img-overlay").click(function(event) {
            // Prevents default behavior
            event.preventDefault();
            // Adds href attribute to variable
            var imageLocation = $(this).prev().attr("href");
            // Add the image src to $image
            $image.attr("src", imageLocation);
            // Fade in the overlay
            $overlay.fadeIn("slow");
          });

          // When the overlay is clicked
          $overlay.click(function() {
            // Fade out the overlay
            $(this).fadeOut("slow");
          });

          // When next button is clicked
          $nextButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").next().find("img"));
            // All of the images in the gallery
            var $images = $("#image-gallery img");
            // If there is a next image
            if ($nextImg.length > 0) { 
              // Fade in the next image
              $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            } else {
              // Otherwise fade in the first image
              $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
            }
            // Prevents overlay from being hidden
            event.stopPropagation();
          });

          // When previous button is clicked
          $prevButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").prev().find("img"));
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            // Prevents overlay from being hidden
            event.stopPropagation();
          });

          // When the exit button is clicked
          $exitButton.click(function() {
            // Fade out the overlay
            $("#overlay").fadeOut("slow");
          });
      },

      backToTopInit: function () {
        $(document).ready(function(){
        "use strict";
    
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength / height);
          progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress);	
        var offset = 50;
        var duration = 550;
        jQuery(window).on('scroll', function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
          } else {
            jQuery('.progress-wrap').removeClass('active-progress');
          }
        });				
        jQuery('.progress-wrap').on('click', function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
        
        
      });

      },

      progressAvtivation: function(){
        $(window).scroll(function () {
          if ($(this).scrollTop() > 250) {
            var bars = document.querySelectorAll('.meter > span');
            //console.clear();
            setInterval(function(){
              bars.forEach(function(bar){
                var getWidth = parseFloat(bar.dataset.progress);
                for(var i = 0; i < getWidth; i++) {
                  bar.style.width = i + '%';
                }
              });
            }, 100);
          }
        })
      },

      gsapTextanim: function(){
        $(document).ready(function(){
          let addAnimation = function () {
            $(".skew-up").each(function (index) {
              const text = new SplitType($(this), {
                types: "lines, words",
                lineClass: "word-line"
              });    let textInstance = $(this);
              let line = textInstance.find(".word-line");
              let word = line.find(".word");    let tl = gsap.timeline({
                scrollTrigger: {
                  trigger: textInstance,
                  start: "top 85%",
                  end: "top 85%",
                  onComplete: function () {
                    $(textInstance).removeClass("skew-up");
                  }
                }
              });    tl.set(textInstance, { opacity: 1 }).from(word, {
                y: "100%",
                skewX: "-5",
                duration: 2,
                stagger: 0.03,
                ease: "expo.out"
              });
            });
           };addAnimation();window.addEventListener("resize", function (event) {
              if ($(window).width() >= 992) {addAnimation(); }
           });
        });
      },

      smoothScroll: function (e) {
        $(document).on('click', '.onepage a[href^="#"]', function (event) {
          event.preventDefault();
      
          $('html, body').animate({
              scrollTop: $($.attr(this, 'href')).offset().top
          }, 2000);
        });
      },

     

      preloader:function(){
        var preload = $("#elevate-load");
        function bannerStop() {
          if ($("#block-solar-views-block-banner-block-1").hasClass("block-views-blockbanner-block-1")) {      
            document.querySelector(".block_content_banner").classList.add("d-none");
          }                
        }          
        const bannerStopTimeout = setTimeout(bannerStop, 3000);
        clearTimeout(bannerStopTimeout);
        if (preload.length){                               
          window.addEventListener('load',function(){
            document.querySelector('#elevate-load').classList.add("loaded");
            if ($("#block-solar-views-block-banner-block-1").hasClass("block-views-blockbanner-block-1")) {   
              document.querySelector(".block_content_banner").classList.remove("d-none");
            }
          }); 
        };

      },
      cartNumberIncDec: function(){
        $(document).ready(function(){
          
        $(function () {
          $(".button").on("click", function () {
            var $button = $(this);
            var $parent = $button.parent();
            var oldValue = $parent.find('.input').val();
      
            if ($button.text() == "+") {
              var newVal = parseFloat(oldValue) + 1;
            } else {
              // Don't allow decrementing below zero
              if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
              } else {
                newVal = 1;
              }
            }
            $parent.find('a.add-to-cart').attr('data-quantity', newVal);
            $parent.find('.input').val(newVal);
          });
        });
        });
      },

      // cart bar show
      cartBarshow: function () {
        // Cart Bar show & hide
        $(document).on('click', '.cart-icon', function () {
          $(".cart-bar").addClass("show");
          $("#anywhere-home").addClass("bgshow");
        });
        $(document).on('click', '.close-cart', function () {
          $(".cart-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
        $(document).on('click', '#anywhere-home', function () {
          $(".cart-bar").removeClass("show");
          $("#anywhere-home").removeClass("bgshow");
        });
      }
      
  }

  drJs.m();


  class PRESTimeline {
    constructor(target, color) {
        // this.__process_stylesheet(document.styleSheets[0]);
        this.base = target;
        this.color = color;
        // console.log(this.color)
        this.periodContainer = $(this.base).find('.periods-container');
        this.cardContainer = $(this.base).find('.cards-container');
        this.timelineNodeContainer = $(this.base).find('.timeline-container .timeline');
        // this.activePeriod = $(this.base).find('.periods-container section.active')
        this._parseData();
        this._initialColor();
        this._generateTimeline();
        this._setStateClasses();
        this._assignBtn();
        this._adjustPeriodContainer();
        this._adjustCardContainer();
        // console.log(this.cardData)
    }
    _parseData() {
        let base = this.base;
        let periods = $(base).find('.periods-container section');
        for (let section of periods) {
            section.period = $(section).attr('period');
            section.index = $(section).index();
        }
        // console.log(periods)
        this.periodData = periods;
        let data = $(base).find('.cards-container section');
        // console.log(data)
        for (let section of data) {
            section.period = $(section).attr('period');
            section.index = $(section).index();
        }
        // console.log(data)
        this.cardData = data;
        // #assign initial entry point (active items)
        this.activePeriod = this.periodData[0];
        this.activePeriodIndex = 0;
        this.activeCard = this.cardData[0];
        this.activeCardIndex = 0;
    }
    _setStateClasses() {
        // # periods
        $(this.base).find('.periods-container section.active').removeClass('active');
        $(this.base).find('.periods-container section.prev').removeClass('prev');
        $(this.base).find('.periods-container section.next').removeClass('next');
        // console.log("setclass: " + this.activePeriod.index)
        $(this.activePeriod).addClass('active');
        // console.log(this.activePeriod.index)
        // this.activePeriodIndex = this.activePeriod.index
        if ($(this.activePeriod).prev().length != 0) {
            $(this.activePeriod).prev().addClass('prev');
            $(this.base).find('.periods-container .btn-back').removeClass('hide');
        }
        else {
            $(this.base).find('.periods-container .btn-back').addClass('hide');
        }
        if ($(this.activePeriod).next().length != 0) {
            $(this.activePeriod).next().addClass('next');
            $(this.base).find('.periods-container .btn-next').removeClass('hide');
        }
        else {
            $(this.base).find('.periods-container .btn-next').addClass('hide');
        }
        // ## cards
        $(this.base).find('.cards-container section.active').removeClass('active');
        $(this.base).find('.cards-container section.prev').removeClass('prev');
        $(this.base).find('.cards-container section.next').removeClass('next');
        $(this.activeCard).addClass('active');
        // this.activeCardIndex - this.activeCard.index
        if ($(this.activeCard).prev().length != 0) {
            $(this.activeCard).prev().addClass('prev');
        }
        if ($(this.activeCard).next().length != 0) {
            $(this.activeCard).next().addClass('next');
        }
        // ## timeline 
        $(this.base).find('.timeline li.active').removeClass('active');
        // let findNode = $(this.base).find('.timeline ol li')[this.activeCard.index]
        $(this.timelineData[this.activeCard.index]).addClass('active');
        let timelineB = $(this.base).find('.timeline-container .btn-back');
        let timelineN = $(this.base).find('.timeline-container .btn-next');
        // console.log($(timelineN))
        if (this.activeCardIndex === 0) {
            timelineB.addClass('hide');
        }
        else {
            timelineB.removeClass('hide');
        }
        if (this.activeCardIndex >= this.cardData.length - 1) {
            timelineN.addClass('hide');
        }
        else {
            timelineN.removeClass('hide');
        }
    }
    // ## timeline generater
    _generateTimeline() {
        // ## create node list
        let htmlWrap = '<ol></ol>';
        $(this.timelineNodeContainer).append(htmlWrap);
        let wrap = $(this.timelineNodeContainer).find('ol');
        let numNode = this.cardData.length;
        for (let i = 0; i < numNode; i++) {
            let c = this.cardData[i].color;
            let el = wrap.append('<li class="' + this.cardData[i].period + '" style="border-color: ' + c + '"></li>');
        }
        // ## width of timeline
        let nodeW = 200;
        wrap.css('width', nodeW * numNode - 16);
        let nodeList = $(this.base).find('.timeline ol li');
        this.timelineData = nodeList;
    }
    // ## assign button actions
    _assignBtn() {
        let periodPrev = $(this.base).find('.periods-container .btn-back');
        let periodNext = $(this.base).find('.periods-container .btn-next');
        periodPrev.click(() => {
            if (this.activePeriodIndex > 0) {
                // console.log('prev')
                this.activePeriodIndex -= 1;
                this.activePeriod = this.periodData[this.activePeriodIndex];
                this._chainActions('period');
                this._setStateClasses();
            }
            this._adjustPeriodContainer();
        });
        periodNext.click(() => {
            if (this.activePeriodIndex < this.periodData.length - 1) {
                // console.log('next' + this.activePeriodIndex)
                this.activePeriodIndex += 1;
                this.activePeriod = this.periodData[this.activePeriodIndex];
                this._chainActions('period');
                this._setStateClasses();
            }
            this._adjustPeriodContainer();
        });
        let timelinePrev = $(this.base).find('.timeline-container .btn-back');
        let timelineNext = $(this.base).find('.timeline-container .btn-next');
        timelinePrev.click(() => {
            if (this.activeCardIndex > 0) {
                this.activeCardIndex -= 1;
                this.activeCard = this.cardData[this.activeCardIndex];
                this._chainActions('timeline');
                this._setStateClasses();
            }
            this._adjustCardContainer();
            this._adjustPeriodContainer();
        });
        timelineNext.click(() => {
            if (this.activeCardIndex < this.cardData.length - 1) {
                this.activeCardIndex += 1;
                this.activeCard = this.cardData[this.activeCardIndex];
                this._chainActions('timeline');
                this._setStateClasses();
            }
            this._adjustCardContainer();
            this._adjustPeriodContainer();
        });
        // ## assign each timeline li
        for (let i = 0; i < this.timelineData.length; i++) {
            $(this.timelineData[i]).click(() => {
                this.activeCardIndex = this.cardData[i].index;
                this.activeCard = this.cardData[this.activeCardIndex];
                this._chainActions('timeline');
                this._setStateClasses();
                this._adjustCardContainer();
                this._shiftTimeline();
            });
        }
    }
    // ## color ##
    _initialColor() {
        for (let i = 0; i < this.periodData.length; i++) {
            let p = this.periodData[i].period;
            this.periodData[i].color = this.color[p];
            let temp = this.periodData[i];
            $(temp).css('border-color', temp.color);
            $(temp).find('.year').css('color', temp.color);
            // ## color for timeline items, this part utilize the period name as class which will be add to the li later
            // ### cross browser bug fix
            let sbstyle = document.createElement("style");
            document.head.appendChild(sbstyle);
            // let sheet = document.styleSheets[0]
            sbstyle.sheet.insertRule('li.' + p + '.active { background-color: ' + this.color[p] + ' !important } ', 0);
            sbstyle.sheet.insertRule('li.' + p + '::before { background-color: ' + this.color[p] + ' } ', 0);
            sbstyle.sheet.insertRule('li.' + p + '::after { background-color: ' + this.color[p] + ' } ', 0);
        }
        for (let i = 0; i < this.cardData.length; i++) {
            let p = this.cardData[i].period;
            this.cardData[i].color = this.color[p];
            let temp = this.cardData[i];
            $(temp).css('border-color', temp.color);
            $(temp).find('.year').css('color', temp.color);
        }
    }
    _adjustPeriodContainer() {
        let activeH = $(this.activePeriod).outerHeight();
        $(this.periodContainer).height(activeH);
        console.log('top adjusted');
    }
    _adjustCardContainer() {
        let activeH = $(this.activeCard).outerHeight() + 24;
        $(this.cardContainer).height(activeH);
        console.log('bot adjusted');
    }
    _shiftTimeline() {
        // #### We need to fix this part if using this component in different sizes ####
        let timelineW = $(this.base).find('.timeline-container').outerWidth();
        let timelinePadding = 210;
        let timelineCenter = 300;
        let liWidth = 16;
        let activeNodeX = $(this.timelineData[this.activeCardIndex]).position().left;
        let finalPos = -activeNodeX + timelinePadding;
        $(this.timelineNodeContainer).css('left', finalPos);
        console.log(activeNodeX);
    }
    _chainActions(state) {
        switch (state) {
            case 'period':
                console.log('period');
                if (this.activePeriod.period != this.activeCard.period) {
                    // ## find the closest li with the active period
                    let ta = [];
                    for (let i = 0; i < this.cardData.length; i++) {
                        let temp = this.cardData[i];
                        if (this.activePeriod.period === temp.period)
                            ta.push(temp);
                    }
                    this.activeCard = ta[0];
                    this.activeCardIndex = ta[0].index;
                }
                break;
            case 'timeline':
                console.log('timeline');
                if (this.activeCard.period != this.activePeriod.period) {
                    let ta;
                    for (let i = 0; i < this.periodData.length; i++) {
                        let temp = this.periodData[i];
                        if (this.activeCard.period === temp.period)
                            ta = temp;
                    }
                    this.activePeriod = ta;
                    this.activePeriodIndex = ta.index;
                }
                break;
        }
        this._shiftTimeline();
        this._adjustCardContainer();
    }
  }
  
  $(document).ready(function() {
    let colorcode = {
        'period1': '#fec541',
        'period2': '#36d484',
        'period3': '#32ccf4',
        'period4': '#fec541',
        'period5': '#36d484',
        'period6': '#32ccf4',
        'period7': '#fec541',
        'period8': '#36d484',
        'period9': '#32ccf4',
        'period10': '#fec541',
        'period11': '#36d484',
        'period12': '#32ccf4',
        'period13': '#fec541',
        'period14': '#36d484',
        'period15': '#32ccf4',
        'period16': '#fec541',
        'period17': '#36d484',
        'period18': '#32ccf4',
        'period19': '#fec541',
        'period20': '#36d484',
        'period21': '#32ccf4',
        'period22': '#fec541',
        'period23': '#36d484',
        'period24': '#32ccf4',
        'period25': '#fec541',
        'period26': '#36d484',
        'period27': '#32ccf4'
    };
    if ($(".paragraph--view-mode--default").hasClass("paragraph--type--milestone")) { 
      let timeline = new PRESTimeline($('#this-timeline'), colorcode);
    }
  });


})(jQuery, window) 







