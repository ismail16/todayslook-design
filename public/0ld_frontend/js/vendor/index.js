(function ($) {
    "use strict";

    $(document).ready(function () {

        // Comment this Two below line to display Popup evertime
        var dataValue = false;
        CreateCookie('PopNewsLetter', dataValue, 1);

        var PopNewsLetter = AccessCookie("PopNewsLetter");
        if (PopNewsLetter == "false") {
            setTimeout(function () {
                $("#popnews-bg").fadeIn();
                $("#popnews-box").fadeIn();
            }, 5000);

            $("#popnews-close").click(() => {
                $("#popnews-bg").fadeOut();
                $("#popnews-box").fadeOut();

                var dataValue = true;
                CreateCookie('PopNewsLetter', dataValue, 1);
            });

            $("#popnews-bg").click(() => {
                $("#popnews-bg").fadeOut();
                $("#popnews-box").fadeOut();

                var dataValue = true;
                CreateCookie('PopNewsLetter', dataValue, 1);
            });
        }
    });

})(jQuery);




