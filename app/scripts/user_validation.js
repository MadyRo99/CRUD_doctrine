function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$(document).ready(function(){
	$('#name').focusout(function () {
		var name = $('#name').val();
		if (name === "") {
			$('#name').removeClass("is-valid");
			$('#name').addClass("is-invalid");
			$('#name_info').text("Numele trebuie completat!");
		} else if (!/^[a-zA-Z]+$/.test(name)) {
			$('#name').removeClass("is-valid");
			$('#name').addClass("is-invalid");
			$('#name_info').text("Numele nu este valid!");
		} else {
			$('#name').removeClass("is-invalid");
			$('#name').addClass("is-valid");
			$('#name_info').text("");
		}
	});
	$('#name').focusin(function () {
		$('#name_info').text("");
	});

	$('#username').focusout(function () {
		var username = $('#username').val();
		if (username === "") {
			$('#username').removeClass("is-valid");
			$('#username').addClass("is-invalid");
			$('#username_info').text("Username-ul trebuie completat!");
		} else if (username.length < 6) {
			$('#username').removeClass("is-valid");
			$('#username').addClass("is-invalid");
			$('#username_info').text("Username-ul este prea scurt!");
		} else {
			$('#username').removeClass("is-invalid");
			$('#username').addClass("is-valid");
			$('#username_info').text("");
		}
	});
	$('#username').focusin(function () {
		$('#username_info').text("");
	});

	$('#email').focusout(function () {
		var email = $('#email').val();
		if (email === "") {
			$('#email').removeClass("is-valid");
			$('#email').addClass("is-invalid");
			$('#email_info').text("Email-ul trebuie completat!");
		} else if (!validateEmail(email)) {
			$('#email').removeClass("is-valid");
			$('#email').addClass("is-invalid");
			$('#email_info').text("Email-ul nu este valid!");
		} else {
			$('#email').removeClass("is-invalid");
			$('#email').addClass("is-valid");
			$('#email_info').text("");
		}
	});
	$('#email').focusin(function () {
		$('#email_info').text("");
	});

	$('#password').focusout(function () {
		var password = $('#password').val();
		if (password === "") {
			$('#password').removeClass("is-valid");
			$('#password').addClass("is-invalid");
			$('#password_info').text("Parola trebuie completata!");
		} else if (password.length < 6) {
			$('#password').removeClass("is-valid");
			$('#password').addClass("is-invalid");
			$('#password_info').text("Parola este prea scurta!");
		} else {
			$('#password').removeClass("is-invalid");
			$('#password').addClass("is-valid");
			$('#password_info').text("");
		}
	});
	$('#password').focusin(function () {
		$('#password_info').text("");
	});
});