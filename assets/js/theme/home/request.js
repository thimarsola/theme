// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href").split("contato/", 1).reverse().join('');
    const file = 'wp-content/themes/industriasrc/source/Support/Sender.php';

    $('#form').submit(function () {
        $(".contact__container__row__form__content__status").removeClass("d-none");

        $.ajax({
            url: path.concat(file),
            type: 'POST',
            cache: false,
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__container__row__form__content__status').append(data);

                setTimeout(function (){
                    $(".contact__container__row__form__content__status").addClass("d-none");
                }, 3000);
            },
            error: function(){
                $('.contact__container__row__form__content__status').append('Erro');
            }
        });
        return false;
    });
});