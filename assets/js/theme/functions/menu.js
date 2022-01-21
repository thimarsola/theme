$(function () {
    $('.header__content__toggle').on('click', function(e){
        $('.menu-item-has-children').find('ul').hide();

        const clicks = $(this).data('clicks');
        const header = $('.header');

        if (clicks) {
            $('body').css('overflow', 'auto');
        } else {
            $('body').css('overflow', 'hidden');
        }
        $(this).not('a').data("clicks", !clicks);

        header.toggleClass('header--active');

        if(header.hasClass('header--active')){
            $('body').css('overflow', 'hidden');

            $('.menu li a[href]').not($('.menu-item-has-children > a')).click(function(){
                header.removeClass('header--active');
                $('body').css('overflow', 'auto');
            });

            $(document).click(function (e){
               if(!$(e.target).closest('.header').length){
                   header.removeClass('header--active');
                   $('body').css('overflow', 'auto');
               }
            });
        }
        e.stopPropagation();
    });

    $('.menu-item-has-children').on('click', function(){
        $(this).find('.sub-menu').stop().slideToggle();

        $(document).click(function (e){
            e.stopPropagation();

            if($('.menu-item-has-children').has(e.target).length === 0){
                $('.sub-menu').hide();
            }
        });
    });
});