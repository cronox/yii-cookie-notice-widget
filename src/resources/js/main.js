var CookieAlert = function () {
    var noticeSelector = ".cookie-notice";
    var noticeCloseBtnSelector = ".cookie-notice .cookie-notice--close";
    var cookieName = 'cookieNoticeIsClosed';
    var obj = {
        init: function () {
            if (false !== obj.getCookie(cookieName)) {
                return false;
            }
            obj.showNotice();
            $(document).on('click', noticeCloseBtnSelector, function () {
                console.log('asd');
                obj.setCookie(cookieName, true, 365);
                obj.hideNotice();
                return false;
            });
        },
        hideNotice: function () {
            $(document).find(noticeSelector).hide();
        },
        showNotice: function () {
            $(document).find(noticeSelector).show();
        },
        setCookie: function (cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },
        getCookie: function (cname, defaultVal) {
            defaultVal = (defaultVal === undefined) ? false : defaultVal;
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return defaultVal;
        }
    };
    return obj;
};
$(function () {
    (new CookieAlert()).init();
});

