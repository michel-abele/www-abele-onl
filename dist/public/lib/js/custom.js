// jQuery module pattern
(function() {
    'use strict';

    const setCookie = (name, value, days) => {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + (value || '') + expires + '; path=/';
    };

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

    const hideCookieNotice = () => {
        $('#cookie-notice').fadeOut();
    };

    $(document).ready(function() {
        if (getCookie('cookie_notice_accepted') !== 'true') {
            $('#cookie-notice').show();
        }

        $('#cookie-accept').on('click', function() {
            setCookie('cookie_notice_accepted', 'true', 9);
            hideCookieNotice();
        });
    });

})(jQuery);
