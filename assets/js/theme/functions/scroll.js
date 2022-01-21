$(function () {
    const scrollLink = $('.header a[href^="#"], nav a[href^="#"], .hero a[href^="#"], .procedures a[href^="#"]').not($('.menu-item-has-children > a'));
    scrollLink.on('click', function (e) {
        e.preventDefault();

        if ($(this).length) {
            var id = $(this).attr('href');
            var targetOffset = $(id).position().top;
            const menuHeight = $('.header').innerHeight();

            $('html, body').stop().animate({
                scrollTop: targetOffset - menuHeight
            }, 800);

        } else {
            $('html, body').stop().animate({
                scrollTop: 0
            }, 800);
        }
    });

    $('.menu-item-has-children > a').click(function (e){
        e.preventDefault();
    });
});