$(function () {
    var $win = $(window);

    $win.on('scroll', function () {
        var $navbar = $('.header');

        if ($win.scrollTop() > 90) {
            $navbar.addClass('shadow-xl');
        } else {
            $navbar.removeClass('shadow-xl');
        }
    });
});