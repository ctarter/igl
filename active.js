$(document).ready(function() {
    var currentUrl = window.location.href;
    $("button").each(function() {
        var buttonUrl = $(this).data("url");
        if (currentUrl == buttonUrl) {
            $(this).addClass("active");
        }
    });
});
