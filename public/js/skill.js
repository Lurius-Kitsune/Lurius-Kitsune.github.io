const $ButtonReport = $(".skillTabSelect");
const $skillMenu = $("#skillTabMenu");
$ButtonReport.on("click", function () {
	let $clickedButton = $(this);
	let clickedButtonValue = $clickedButton.attr("value");
	let $linkSkillContent = $("#skillTab-wrapper-" + clickedButtonValue);
    let currentTabId = $skillMenu.find(".active").attr("value");

	$("#skillTab-wrapper-" + currentTabId).addClass("d-none");

	//remove active class from button who have
	$("#skillTabMenu .page-link").removeClass("active");

	//add active class to clicked button
	$clickedButton.addClass("active");

	if (doesExistAndDisplayNone($linkSkillContent)) {
		$linkSkillContent.removeClass("d-none");
	} 
    else {
		//request content from server and parse it to html
		$.ajax({
			url: "/",
			type: "GET",
			data: {
				action: "homeController",
				content: "home-skill",
				skillTab: clickedButtonValue,
			},
			success: function (data) {
				$(data).prependTo("#home-skill-content");
			},
			error: function (data) {
				//console.error("Erreur dans le chargement du contenu de la page")
				$(data.responseText).prependTo("#home-skill-content");
			},
            complete: function () {
                AOS.init();
            }
		});
	}
    AOS.init();
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
