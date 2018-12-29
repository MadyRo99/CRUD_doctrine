$(document).ready(function(){
	$("#category").focusout(function(){
		var option = $('select[name=category]').val();
		if (option == 'none') {
			$('select[name=category]').removeClass("is-valid");
			$('select[name=category]').addClass("is-invalid");
			$('#category_info').text("Selecteaza categoria!");
		} else {
			$('select[name=category]').removeClass("is-invalid");
			$('select[name=category]').addClass("is-valid");
		}
	});
	$("#category").focusin(function(){
		$('#category_info').text("");
	});

	$('#title').focusout(function () {
		var title = $('#title').val();
		if (title === "") {
			$('#title').removeClass("is-valid");
			$('#title').addClass("is-invalid");
			$('#title_info').text("Titlul trebuie completat!");
		} else {
			$('#title').removeClass("is-invalid");
			$('#title').addClass("is-valid");
			$('#title_info').text("");
		}
	});
	$('#title').focusin(function () {
		$('#title_info').text("");
	});

	$('#text').focusout(function () {
		var text = $('#text').val();
		if (text === "") {
			$('#text').removeClass("is-valid");
			$('#text').addClass("is-invalid");
			$('#text_info').text("Textul trebuie completat!");
		} else {
			$('#text').removeClass("is-invalid");
			$('#text').addClass("is-valid");
			$('#text_info').text("");
		}
	});
	$('#text').focusin(function () {
		$('#text_info').text("");
	});

	$('#tags').focusout(function () {
		var tags = $('#tags').val();
		if (tags === "") {
			$('#tags').removeClass("is-valid");
			$('#tags').addClass("is-invalid");
			$('#tags_info').text("Tag-urile trebuiesc completate!");
		} else {
			$('#tags').removeClass("is-invalid");
			$('#tags').addClass("is-valid");
			$('#tags_info').text("");
		}
	});
	$('#tags').focusin(function () {
		$('#tags_info').text("");
	});
});