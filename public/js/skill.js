const $ButtonReport = $(".skillTabSelect");
$ButtonReport.on("click", function () {
	let $clickedButton = $(this);
	let clickedButtonValue = $clickedButton.attr("value");
	console.log("KA MARCHE");
	//detect if pdfReader is already here
	if ($("#skillTab-wrapper").length) {
		$("#skillTab-wrapper").remove();
	}

	//remove active class from button who have
	$("#skillTabMenu .page-link").removeClass("active");

	//add active class to clicked button
	$clickedButton.addClass("active");

	//request content from server and parse it to html
	$.ajax({
		url: "/",
		type: "GET",
		data: { "action" : "homeController", "content": 'home-skill', 'skillTab': clickedButtonValue },
		success: function (data) {
			$(data).prependTo("#home-skill-content");
		},
		error: function (data) {
			//console.error("Erreur dans le chargement du contenu de la page")
			$(data.responseText).prependTo("#home-skill-content");
		}
	});
});
