<?php
	session_start();
	if (isset($_SESSION['id'])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  	<div class="row">
	    <div class="col"></div>
			<div class="col-8">
			<a href="index.php">< Acasa</a>
			<h1 id="title-spacing">Sign Up</h1>
			<form action="process/signup_process.php" method="POST">
				<div class="form-group">
					<input class="form-control" id="name" type="text" name="name" placeholder="Nume" required="required"><br>
					<p class="error_p" id="name_info" style="color: red;"></p>
					<input class="form-control" id="username" type="text" name="username" placeholder="Username" required="required"><br>
					<p class="error_p" id="username_info" style="color: red;"></p>
					<input class="form-control" id="email" type="email" name="email" placeholder="E-mail" required="required"><br>
					<p class="error_p" id="email_info" style="color: red;"></p>
					<input class="form-control" id="password" type="password" name="password" placeholder="Parola" required="required"><br>
					<p class="error_p" id="password_info" style="color: red;"></p>
					<input class="btn btn-primary" type="submit" name="signup" value="Sign Up"><br><br>
				</div>
			</form>
			<?php
				if (!isset($_GET['result'])) {
					if (isset($_GET['success']) && $_GET['success']) {
						echo '<div class="alert alert-success" role="alert">Inregistrarea a avut loc cu succes!</div>';
					}
				} else {
					$result = json_decode($_GET['result']);
					if (isset($_GET['success']) && $_GET['success'] == 'false') {
						echo '<div class="alert alert-danger" role="alert">';
						foreach ($result as $key => $value) {
							foreach ($value as $i => $l) {
								echo $l.'<br>';
							}
						}
						echo '</div>';
					}
				}
			?>
			</div>
		<div class="col"></div>
	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"> 	
</script>
<script>

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
</script>
</body>
</html>