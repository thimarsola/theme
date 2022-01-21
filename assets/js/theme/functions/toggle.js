$(function (){
    $('.doubts__container__content__card__body').hide();

    $('.doubts__container__content__card__header').click(function(){
        $(this).next().slideToggle();
        $(this).parent().siblings().children().next().slideUp();
        return false;
    });
});