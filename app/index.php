<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<?php
		if (isset($_SESSION['id'])) {
	?>
	<a href="process/logout_process.php">Log Out</a><br><br>
	<?php
	} else { ?>
	<h1>Log In</h1>
	<form action="process/login_process.php" method="POST">
		<input type="text" name="usem" placeholder="Username/Email"><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" value="Log In"><br><br>
	</form>
	<a href="signup.php">Sign Up</a><br><br>
	<a href="#">Password Recovery</a>
	<?php
		}
		if (isset($_GET['success'])) {
			switch ($_GET['success']) {
				case 0:
					echo "<br><p style='color: red;'>Contul nu exista in baza de date!</p>";
					break;
				case 1:
					echo "<br><p style='color: red;'>Parola este gresita!</p>";
					break;
			}
		}
	?>
</body>
</html>