$(window).on("load", function () {
    const $ButtonReport = $(".reportButtonStage");
    $ButtonReport.on("click", function () {
        let $clickedButton = $(this);
        let clickedButtonValue = $clickedButton.attr("value");
        
        //detect if pdfReader is already here
        if ($("#pdfReader").length) {
            $("#pdfReader").remove();
        }

        //remove active class from button who have
        $(".reportButtonStage").removeClass("active");

        //add active class to clicked button
        $clickedButton.addClass("active");

        //request content from server and parse it to html
        $.ajax({
            url: "/?action=companyReport",
            type: "POST",
            data: { "fileName": clickedButtonValue },
            success: function (data) {
                $(data).appendTo("#companyReport-reader-wrapper");
            },
            error: function (data) {
                //console.error("Erreur dans le chargement du contenu de la page")
                $(data.responseText).appendTo("#companyReport-reader-wrapper");
            },
            complete: function () {
                AOS.init();
            }
        });
    });
});