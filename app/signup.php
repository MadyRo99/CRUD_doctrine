<?php
	session_start();
	if (isset($_SESSION['id'])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	
	<a href="index.php">Home</a>
	<h1>Sign Up</h1>
	<form action="process/signup_process.php" method="POST">
		<input id="name" type="text" name="name" placeholder="Name"><br>
		<p id="name_info" style="color: red;"></p>
		<input id="username" type="text" name="username" placeholder="Username"><br>
		<p id="username_info" style="color: red;"></p>
		<input id="email" type="email" name="email" placeholder="Email"><br>
		<p id="email_info" style="color: red;"></p>
		<input id="password" type="password" name="password" placeholder="Password"><br>
		<p id="password_info" style="color: red;"></p>
		<input type="submit" name="signup" value="Sign Up">
	</form>
	<?php
		if (!isset($_GET['result'])) {
			if (isset($_GET['success']) && $_GET['success']) {
				echo '<h2>Inregistrarea a avut loc cu succes!</h2>';
			}
		} else {
			$result = json_decode($_GET['result']);
			if (isset($_GET['success']) && $_GET['success'] == 'false') {
				foreach ($result as $key => $value) {
					foreach ($value as $i => $l) {
						echo '<p>'.$l.'</p>';	
					}
				}
			}
		}
	?>

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
			$('#name_info').text("Numele trebuie completat!");
		} else if (!/^[a-zA-Z]+$/.test(name)) {
			$('#name_info').text("Numele nu este valid!");
		} else {
			$('#name_info').text("");
		}
	});
	$('#name').focusin(function () {
		$('#name_info').text("");
	});

	$('#username').focusout(function () {
		var username = $('#username').val();
		if (username === "") {
			$('#username_info').text("Username-ul trebuie completat!");
		} else if (username.length < 6) {
			$('#username_info').text("Username-ul este prea scurt!");
		} else {
			$('#username_info').text("");
		}
	});
	$('#username').focusin(function () {
		$('#username_info').text("");
	});

	$('#email').focusout(function () {
		var email = $('#email').val();
		if (email === "") {
			$('#email_info').text("Email-ul trebuie completat!");
		} else if (!validateEmail(email)) {
			$('#email_info').text("Email-ul nu este valid!");
		} else {
			$('#email_info').text("");
		}
	});
	$('#email').focusin(function () {
		$('#email_info').text("");
	});

	$('#password').focusout(function () {
		var password = $('#password').val();
		if (password === "") {
			$('#password_info').text("Parola trebuie completata!");
		} else if (password.length < 6) {
			$('#password_info').text("Parola este prea scurta!");
		} else {
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