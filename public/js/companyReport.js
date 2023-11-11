$(window).on("load", function () {
    const $ButtonReport = $(".reportButtonStage");
    $ButtonReport.on("click", function () {
        const $clickedButton = $(this);
        const clickedButtonValue = $clickedButton.attr("value");

        //remove active class from button who have
        $(".reportButtonStage").removeClass("active");

        //add active class to clicked button
        $clickedButton.addClass("active");

        $('#pdfReader').attr('src', `/resources/pdf/${clickedButtonValue}.pdf`);

        //get text from clicked button
        const clickedButtonText = $clickedButton.text();

        // Update the modal's content.
        //change modal title
        $('#rapportModalLabel').text(clickedButtonText);

        $('#rapportModal').modal('show');
    });
});