$(document).ready(function() {
    $('.slider').bxSlider({
        mode: 'fade',
        captions: true,
        slideWidth: 1440,
        pager: false,
        controls: true,
        nextSelector: '.custom-slider-controls .bxNext',
        prevSelector: '.custom-slider-controls .bxPrev',
        nextText: '<i class="fa fa-chevron-circle-right fa-3x"></i>',
        prevText: '<i class="fa fa-chevron-circle-left fa-3x"></i>'
    });



    var servicesSlider = $('#services-slider');
    servicesSlider.owlCarousel({
        margin: 20,
        dots: false,
        loop: true,
        auto: true,
        speed: 1000,
        slideTransition: 'linear',
        autoplay: true,
        autoplaySpeed: 4500,
        lazyLoad: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    }, $(".services-slider-control").removeClass("d-none"));
    // Go to the next item
    $('.services-slider-control .next-control').click(function() {
            servicesSlider.trigger('next.owl.carousel');
        })
        // Go to the previous item
    $('.services-slider-control .prev-control').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        servicesSlider.trigger('prev.owl.carousel', [300]);
    });

    var whyChooseUsSlider = $("#why-choose-us-slider");
    whyChooseUsSlider.owlCarousel({
            animateOut: 'animate__fadeIn',
            animateIn: 'animate__fadeOut',
            loop: true,
            dots: false,
            speed: 1000,
            slideTransition: 'linear',
            // autoplay: true,
            autoplaySpeed: 4500,
            lazyLoad: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        },
        $(".feature-images-slider-control").removeClass("d-none")
    );
    // Go to the next item
    $('.feature-images-slider-control .next-control').click(function() {
            whyChooseUsSlider.trigger('next.owl.carousel');
        })
        // Go to the previous item
    $('.feature-images-slider-control .prev-control').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        whyChooseUsSlider.trigger('prev.owl.carousel', [300]);
    });


    /* Jquery.lazy*/
    // $(function() {
    //     $('.lazy').lazy({
    //         visibleOnly: true,
    //         effect: "fadeIn",
    //         effectTime: 2000,
    //         threshold: 0,
    //         onError: function(element) {
    //             console.log('error loading ' + element.data('src'));
    //         }
    //     });
    // });
});