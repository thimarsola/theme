$(function () {
    var $win = $(window);

    $win.on('scroll', function () {
        if ($win.width() >= 769) {
            var $navbar = $('.header__navbar');

            if ($win.scrollTop() > 90) {
                $navbar.addClass('fixed');
            } else {
                $navbar.removeClass('fixed');
            }
        }
    });
});