//gallery home page
$(function () {
    $('.gallery__row').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

//gallery pages
$(function () {
    $('.content__row__container__row__gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});