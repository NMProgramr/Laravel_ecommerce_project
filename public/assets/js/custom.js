(function ($) {

    "use strict";

    // ============================================
    // FIX: Force preloader to disappear after 6 seconds MAX
    // ============================================

    // Show preloader immediately
    $('#js-preloader').removeClass('loaded');

    // FORCE HIDE after exactly 6 seconds (6000ms)
    setTimeout(function() {
        $('#js-preloader').addClass('loaded');
        $('#js-preloader').fadeOut(300);
        console.log('Preloader forced hidden after 6 seconds');
    }, 6000);

    // Also hide when page fully loads (whichever comes first)
    $(window).on('load', function() {
        $('#js-preloader').addClass('loaded');
        $('#js-preloader').fadeOut(300);
        console.log('Preloader hidden on page load');
    });

    // ============================================
    // Rest of your code (with error protection)
    // ============================================

    // Scroll handler
    $(window).scroll(function() {
        try {
            var scroll = $(window).scrollTop();
            var box = $('.header-text').height();
            var header = $('header').height();

            if (scroll >= box - header) {
                $("header").addClass("background-header");
            } else {
                $("header").removeClass("background-header");
            }
        } catch(e) {
            console.log('Scroll error:', e);
        }
    });

    // FIXED: Safe resize handler - NO RELOAD
    var width = $(window).width();
    $(window).resize(function() {
        try {
            var newWidth = $(window).width();
            // Just track width, don't reload
            width = newWidth;
        } catch(e) {
            console.log('Resize error:', e);
        }
    });

    // Safe Isotope initialization
    try {
        const elem = document.querySelector('.trending-box');
        if (elem) {
            console.log('Initializing Isotope');
            const rdn_events_list = new Isotope(elem, {
                itemSelector: '.trending-items',
                layoutMode: 'masonry'
            });
        }
    } catch(e) {
        console.log('Isotope error:', e);
    }

    // Menu Dropdown Toggle
    try {
        if($('.menu-trigger').length){
            $(".menu-trigger").on('click', function() {
                $(this).toggleClass('active');
                $('.header-area .nav').slideToggle(200);
            });
        }
    } catch(e) {
        console.log('Menu error:', e);
    }

    // Menu elevator animation
    try {
        $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    var width = $(window).width();
                    if(width < 991) {
                        $('.menu-trigger').removeClass('active');
                        $('.header-area .nav').slideUp(200);
                    }
                    $('html,body').animate({
                        scrollTop: (target.offset().top) - 80
                    }, 700);
                    return false;
                }
            }
        });
    } catch(e) {
        console.log('Scroll-to-section error:', e);
    }

    // Parallax effect
    try {
        if($('.cover').length){
            $('.cover').parallax({
                imageSrc: $('.cover').data('image'),
                zIndex: '1'
            });
        }
    } catch(e) {
        console.log('Parallax error:', e);
    }

})(window.jQuery);
