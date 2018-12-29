<?php
	session_start();
	if (isset($_SESSION['uid'])) header("Location: index.php");
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
<script src="scripts/user_validation.js"></script>
</body>
</html>