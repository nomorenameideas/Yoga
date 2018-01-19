$(document).ready(function () {

    $(".jq-click").click(function () {
        $(".jq").each(function (index) {
            if ($(this).val() === "") {
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });
        if ($(".error").length === 0) {
            $("#reg-submit").submit();
        }
    });

});
