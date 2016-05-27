$( document ).ready(function() {

	var popUp = $("#pop-up");
	var popUpSpan = $("#pop-up span");
	var form = $("#regExp");
	var check = $("#check");
	var apply = $("#apply");

	check.on("click", function(e) {
		e.preventDefault();
		$.ajax({
			url: "checkRegExp.php",
			type: "POST",
			dataType: "json",
			data: form.serializeArray(),
			success: function(response) {
				popUpSpan.html(response);
				popUp.bPopup();
			}
		});
	});

	apply.on("click", function(e) {
		e.preventDefault();
		$.ajax({
			url: "showResult.php",
			type: "POST",
			dataType: "json",
			data: form.serializeArray(),
			success: function(response) {
				$.each(response[0], function(i, value) {
					form.after("<p>" + value + "</p>");
				});
			}
		});
	});
});