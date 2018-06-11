import './graphql/login.js';
import './graphql/logout.js';
import './graphql/posts.js';

(function($) { // Begin jQuery

    $(document).ready(function() {
        var menu = $('nav > ul'),
            menuLink = $('#mobile-menu a');
        menuLink.on('click', function() {
            if (menu.hasClass('closed')) {
                menu.removeClass('closed');
                menu.addClass('open');
            } else {
                menu.removeClass('open');
                menu.addClass('closed');
            }
        });
    });
    date1 = new Date();
    date = date1.getDate();
    year = date1.getFullYear();
    month = date1.getMonth();

})(jQuery);