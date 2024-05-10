// jQuery module pattern
(function($) {
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

    // function for initializing the cookie notice
    const initCookieNotice = () => {
        if (getCookie('cookie_notice_accepted') !== 'true') {
            $('#cookie-notice').show();
        }

        $('#cookie-accept').on('click', function() {
            setCookie('cookie_notice_accepted', 'true', 9);
            $('#cookie-notice').fadeOut();
        });
    };

    // function for toggling the mobile nav
    const toggleMobileNav = () => {
        $('body').toggleClass('mobile-nav-active');
        $('#mobile-nav-toggle').toggleClass('bi-before-list bi-before-x');
    };

    // functions for handling the scroll event
    const navBarLinksActive = () => {
        const scrollDistance = $(window).scrollTop();
        $('section').each(function() {
            const hash = $(this).attr('id');
            const navLink = $('#navbar .scrollto[href="#' + hash + '"]');
            const sectionTop = $(this).offset().top - 100;
            const sectionHeight = $(this).outerHeight();
            if (scrollDistance >= sectionTop && scrollDistance < sectionTop + sectionHeight) {
                navLink.addClass('active');
            } else {
                navLink.removeClass('active');
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

    // function for initializing the tab menu
    const initTabMenu = () => {
        $('.tab-container').each(function() {
            $(this).find('.nav-tabs a').on('click', function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    };

    // jQuery ready function
    $(document).ready(function() {

        // cookie notice
        initCookieNotice();

        // tab menu
        initTabMenu();

        // mobile nav toggle
        $('#mobile-nav-toggle').on('click', function() {
            toggleMobileNav();
        });

        // close mobile nav when a link is clicked
        $('#navbar .nav-link').on('click', function() {
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('#mobile-nav-toggle').removeClass('bi-before-x').addClass('bi-before-list');
            }
        });

        // scroll events
        $(window).on('scroll', function() {
            navBarLinksActive();
            toggleBackToTop();
        });

        $('.scrollto').on('click', function(e) {
            const hash = $(this).attr('href');
            if ($(hash).length) {
                e.preventDefault();
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
        })
    });

})(jQuery);

// other libraries
(function() {
    'use strict';

    // typed.js
    const select = ( element, all = false ) => {
        element = element.trim()
        if (all)
        {
            return [...document.querySelectorAll(element)]
        }
        else
        {
            return document.querySelector(element)
        }
    };

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

    // purecounter.js
    const htmlElement = document.documentElement;
    const lang = htmlElement.getAttribute('lang');

    let formater;
    if (lang === 'de') {
        formater = 'de-DE';
    } else if (lang === 'en') {
        formater = 'en-US';
    } else {
        formater = 'en-US';
    }
    
    new PureCounter({
        separator: true,
        once: false,
        formater: formater
    });

})();
