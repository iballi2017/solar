$(document).ready(function() {
    /* page loader */
    // var loading = $("#loading");
    // $(window).on('load', function() {
    //     if (loading) {
    //         loading.hide();
    //     }
    // });

    $('.slider').bxSlider({
        auto: true,
        mode: 'fade',
        captions: true,
        slideWidth: 1440,
        pager: true,
        controls: true,
        nextSelector: '.custom-slider-controls .bxNext',
        prevSelector: '.custom-slider-controls .bxPrev',
        nextText: `<svg width="54" height="50" viewBox="0 0 64 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.3">
<rect x="-1.5" y="1.5" width="61" height="57" rx="28.5" transform="matrix(-1 0 0 1 61 0)" fill="white" stroke="#209E02" stroke-width="3"/>
<path d="M25.5 19.6831C25.5 17.8152 27.7584 16.8797 29.0792 18.2006L36.3744 25.4957C38.862 27.9833 38.862 32.0166 36.3744 34.5043L29.0792 41.7994C27.7584 43.1203 25.5 42.1848 25.5 40.3169C25.5 39.7608 25.7209 39.2275 26.1141 38.8343L27.6461 37.3024C31.679 33.2694 31.679 26.7306 27.6461 22.6976L26.1141 21.1657C25.7209 20.7725 25.5 20.2392 25.5 19.6831Z" fill="#414143" stroke="#209E02" stroke-width="3"/>
</g>
</svg>
`,
        prevText: `<svg width="54" height="50" viewBox="0 0 64 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.3">
<rect x="1.5" y="1.5" width="61" height="57" rx="28.5" fill="white" stroke="#209E02" stroke-width="3"/>
<path d="M39.5 19.6831C39.5 17.8152 37.2416 16.8797 35.9208 18.2006L28.6256 25.4957C26.138 27.9833 26.138 32.0166 28.6256 34.5043L35.9208 41.7994C37.2416 43.1203 39.5 42.1848 39.5 40.3169C39.5 39.7608 39.2791 39.2275 38.8859 38.8343L37.3539 37.3024C33.321 33.2694 33.321 26.7306 37.3539 22.6976L38.8859 21.1657C39.2791 20.7725 39.5 20.2392 39.5 19.6831Z" fill="#414143" stroke="#209E02" stroke-width="3"/>
</g>
</svg>
`
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
        // setTimeout(() => {
        $(".feature-images-slider-control").removeClass("d-none")
        // }, 2000);
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



    /* products sort dropdown radio */
    function radioSelect(arg1, arg2) {
        if (arg1.is(':checked')) {
            arg1.siblings().addClass("active");
            arg2.html(arg1.siblings("label").html());
        } else {
            arg2.html("Recommended");
        }
        arg1.on("click", function() {
            arg2.html($(this).siblings("label").html());
        });
    }
    var selected = $("#selected");
    var selected_sort = $("input[type='radio'][name='sort']");
    var selected_sort_checked = $("input[type='radio'][name='sort']:checked");
    radioSelect(selected_sort, selected)
    selected.html(selected_sort_checked.siblings("label").html());


    /*  */
    $(".item-dropdown-content").mouseover(function() {
        if (!$(this).siblings(".nav-link").hasClass("active")) {
            $(this).siblings(".nav-link").css({ "color": "#209E02" })
        }
    })
    $(".item-dropdown-content").mouseleave(function() {
        if (!$(this).siblings(".nav-link").hasClass("active")) {
            $(this).siblings(".nav-link").css({ "color": "#414143" });
        }
    });


    /* Overlay effect toggler*/
    var overlay = $("#overlay");

    /* Toggling user sidenav */
    var sidebarToggler = $("#sidebar-toggler");
    var sidenavWrapper = $(".sidenav-wrapper");
    sidebarToggler.click(function() {
            overlay.addClass("show");
            sidenavWrapper.addClass("show");
        })
        /* Remove overlay */
    if (overlay) {
        overlay.click(function() {
            overlay.removeClass("show");
            sidenavWrapper.removeClass("show");
        })
    }


    (function() {

        /* product details image preview */
        $('.thumb').each(function() {
            let y = $(".thumb").children().attr('src');
            $('#screen').children('img').attr('src', y);
            return false;
        });


        /* image preview in product-details-v2.php page on page load*/
        var activeImgUrl = "";
        $(".preview-img").each(function() {
            $(this).siblings().css({ 'background-image': 'url(' + $(this).val() + ')', 'background-size': 'contain', 'background-repeat': 'no-repeat', 'background-position': 'center' })
            if ($(this).is(':checked')) {
                activeImgUrl = $(this).val();
                $('#img-preview-screen').css({
                    'background-image': 'url(' + activeImgUrl + ')',
                    'background-size': 'contain',
                    'background-repeat': 'no-repeat',
                    'background-position': 'top',
                    'transition': 'all 1s'
                })
            }
        })
    })();

    /* image preview in product-details-v2.php page on image click */
    var selectedImgUrl = "";
    $(".preview-img").each(function() {
        $(this).click(function() {
            if ($(this).is(':checked')) {
                selectedImgUrl = $(this).val();
                $('#img-preview-screen').css({
                    'background-image': 'url(' + selectedImgUrl + ')',
                    'background-size': 'contain',
                    'background-repeat': 'no-repeat',
                    'background-position': 'center',
                    'transition': 'all 1s'
                })
            }
        })
    });




    /* product quick view */
    var quickViewBtn = $("#sidebar-toggler");
    var itemPreview = $(".sidenav-wrapper");
    sidebarToggler.click(function() {
            overlay.addClass("show");
            sidenavWrapper.addClass("show");
        })
        /* Remove overlay */
    if (overlay) {
        overlay.click(function() {
            overlay.removeClass("show");
            sidenavWrapper.removeClass("show");
        })
    }


});