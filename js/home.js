$(window).on("load", function () {
    //catch all element from a nav tab and make a button on click event
    $homeMenu = $("#home-menu");
    $("#home-menu li button").on("click", function () {
        let $clickedButton = $(this);
        let clickedButtonId = $clickedButton.attr("id");
        let $linkContent = $("#" + clickedButtonId + "-content");

        let currentButtonId = $homeMenu.find(".active").attr("id");

        $("#home-menu li button").removeClass("active");
        $("#" + currentButtonId + "-content").addClass("d-none");

        $clickedButton.addClass("active");   
        if (doesExistAndDisplayNone($linkContent)) {
            $linkContent.removeClass("d-none");
        }
        else {
            //request content from server and parse it to html
            $.ajax({
                url: "/controller/home/c_homeMenu.php",
                type: "POST",
                data: { "content": clickedButtonId },
                success: function (data) {
                    $(data).appendTo("#home-content-wrapper");
                },
                error: function (data) {
                    console.error("Erreur dans le chargement du contenu de la page")
                }
            });
        }
    });
});

/**
 * Detect if an HTML element exist and have class d-none
 * @param {} $jqueryElement 
 * @returns boolean or null
 */
function doesExistAndDisplayNone($jqueryElement) {
    //check if jqueryElement exist and haave class d-none
    try {
        if ($jqueryElement.hasClass("d-none")) {
            return true;
        }
        else {
            return false;
        }
    }
    catch (e) {
        return null;
    }
}
