// var $j = jQuery.noConflict();

$(document).ready(function () {
   const path = $(location)
      .attr("href")
      .split("contato/", 1)
      .reverse()
      .join("");
   const file = "wp-content/themes/theme/source/Support/Sender.php";

   $("#form").submit(function () {
      $(".contact__form__status").removeClass("hidden");

      $.ajax({
         url: path.concat(file),
         type: "POST",
         cache: false,
         data: $("#form").serialize(),
         success: function (data) {
            $(".contact__form__status").append(data);

            setTimeout(function () {
               $(".contact__form__status").addClass("hidden");
            }, 3000);
         },
         error: function () {
            $(".contact__form__status").append("Erro");
         },
      });
      return false;
   });
});
