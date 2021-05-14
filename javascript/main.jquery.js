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



    var whatWeDoSlider = $('#what-we-do-slider');
    whatWeDoSlider.owlCarousel({
        margin: 20,
        dots: false,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            600: {
                items: 3
            }
        }
    });
    // Go to the next item
    $('.services-slider-control .next-control').click(function() {
            whatWeDoSlider.trigger('next.owl.carousel');
        })
        // Go to the previous item
    $('.services-slider-control .prev-control').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        whatWeDoSlider.trigger('prev.owl.carousel', [300]);
    })
});