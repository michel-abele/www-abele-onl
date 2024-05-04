// jQuery module pattern
(function() {
    'use strict';

    // function for setting a cookie
    const setCookie = (name, value, days) => {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + (value || '') + expires + '; path=/';
    };

    // function for getting a cookie
    const getCookie = (name) => {
        const nameEQ = name + '=';
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length);
            }
        }
        return null;
    };

    // function for fading out the cookie notice
    const hideCookieNotice = () => {
        $('#cookie-notice').fadeOut();
    };

    // function for initializing the cookie notice
    const initCookieNotice = () => {
        if (getCookie('cookie_notice_accepted') !== 'true') {
            $('#cookie-notice').show();
        }

        $('#cookie-accept').on('click', function() {
            setCookie('cookie_notice_accepted', 'true', 9);
            hideCookieNotice();
        });
    };

    // function for toggling the mobile nav
    const toggleMobileNav = () => {
        $('body').toggleClass('mobile-nav-active');
        $('#mobile-nav-toggle').toggleClass('bi-before-list bi-before-x');
    };

    // functions for handling the scroll event
    const navBarLinksActive = () => {
        const position = $(window).scrollTop() + 200;
        $('#navbar .scrollto').each(function() {
            const hash = $(this).attr('hash');
            if (!hash) return;
            const section = $(hash);
            if (!section.length) return;
            if (position >= section.offset().top && position <= (section.offset().top + section.outerHeight())) {
                $('#navbar .scrollto').removeClass('active');
                $(this).addClass('active');
            }
        });
    };

    const scrollTo = (element) => {
        const elementPosition = $(element).offset().top;
        $('html, body').animate({
            scrollTop: elementPosition
        }, 800);
    };

    const toggleBackToTop = () => {
        if ($(window).scrollTop() > 100) {
            $('#back-to-top').addClass('active');
        } else {
            $('#back-to-top').removeClass('active');
        }
    };

    // function for initializing the skills progress
    const initSkillsProgress = () => {
        let skillsContent = $('.skills-content');
        if (skillsContent.length) {
            skillsContent.waypoint({
                handler: function(direction) {
                    $('.progress .progress-bar').each(function() {
                        let width = $(this).attr('aria-valuenow');
                        $(this).css('width', width + '%');
                    });
                },
                offset: '80%'
            });
        }
    };

    // jQuery ready function
    $(document).ready(function() {

        // cookie notice
        initCookieNotice();

        // mobile nav toggle
        $('#mobile-nav-toggle').on('click', function() {
            toggleMobileNav();
        });

        // scroll events
        $(window).on('scroll', function() {
            navBarLinksActive();
            toggleBackToTop();
        });

        $('.scrollto').on('click', function(e) {
            const hash = $(this).attr('hash');
            if ($(hash).length) {
                e.preventDefault();
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle').toggleClass('bi-list bi-x');
                }
                scrollTo(hash);
            }
        });

        if (window.location.hash && $(window.location.hash).length) {
            scrollTo(window.location.hash);
        }

        // skills progress
        initSkillsProgress();

        // animations on scroll
        AOS.init( {
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        } )
    });

})(jQuery);

// other libraries
(function() {
    'use strict';

    const select = ( element, all = false ) => {
        element = element.trim()
        if ( all )
        {
            return [...document.querySelectorAll( element )]
        }
        else
        {
            return document.querySelector( element )
        }
    }

    const typed = select( '.typed' )
    if (typed)
    {
        let typed_strings = typed.getAttribute( 'data-typed-items' )
        typed_strings = typed_strings.split( ',' )
        new Typed( '.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000
        } );
    }

    new PureCounter( {
        separator: true,
        formater: 'de-DE'
    } );
})();