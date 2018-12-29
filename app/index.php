<?php
	session_start();
	require_once ("../connection.php");
	$articles = new ArticlesImplement();
	$articles = $articles->getAllArticles();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acasa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  	<div class="row">
    	<div class="col"></div>
    		<div class="col-8">
			<?php
				if (isset($_SESSION['uid'])) {
			?>
			<a class="btn btn-primary" href="process/logout_process.php">Log Out</a><br><br>
			<a class="btn btn-primary" href="articole_add.php">Adauga articol</a><br><br>
			<form class="form-inline" style="width: 100%;">
			  <div class="form-group" style="width: 90%;">
			    <input style="width: 99%;" type="text" class="form-control" placeholder="Cauta cuvinte cheie...">
			  </div>
			  <button type="submit" class="btn btn-info">Cauta</button>
			</form>
			<?php
			} else { ?>
			<h1 id="title-spacing">Log In</h1>
			<form action="process/login_process.php" method="POST">
				<div class="form-group">
					<input class="form-control" type="text" name="usem" placeholder="Username / E-mail" required="required"><br><br>
					<input class="form-control" type="password" name="password" placeholder="Parola" required="required"><br><br>
					<input class="btn btn-primary" type="submit" value="Log In"><br><br>
				</div>
			</form>
			<a href="signup.php">Sign Up</a><br><br>
			<a href="#">Recuperare parola</a>
			<?php
				}
				if (isset($_GET['success'])) {
					switch ($_GET['success']) {
						case 0:
							echo "<p class='loginfail' style='color: red;'>Contul nu exista in baza de date!</p>";
							break;
						case 1:
							echo "<p class='loginfail' style='color: red;'>Parola este gresita!</p>";
							break;
					}
				}
				echo '<br><br>';
				foreach ($articles as $article) {
					switch ($article->getCategory()) {
						case '1':
							$categorie_article = "Politic";
							break;
						case '2':
							$categorie_article = "IT";
							break;	
						case '3':
							$categorie_article = "Sport";
							break;
						case '4':
							$categorie_article = "Monden";
							break;
						case '5':
							$categorie_article = "Stiri";
							break;
					}
					echo "
						<h3 style='margin-top: 50px;'>".$article->getTitle()."</h3>
						<p style='color: red; font-weight: 600; text-decoration: underline;'>".$categorie_article."</p>
						<p style='text-indent: 50px;'>".$article->getText()."</p>
						<p style='font-weight: 650;'><span style='color: red;'>Tags: </span>".$article->getTags()."</p>";
						if (isset($_SESSION['uid']) && $_SESSION['uid'] == $article->getUidUser())
						echo "
						<a class='btn btn-info' href='articole_edit.php?uid_article=".$article->getUidArticles()."' style='float: left; color: white;'>Editeaza</a>
						<form style='float: left; margin-left: 10px;' action='process/articole_delete_process.php' method='GET' >
							<input class='btn btn-danger' type='submit' name='delete' value='Sterge'>
							<input type='hidden' name='uid_article' value=".$article->getUidArticles().">
						</form>
						<div class='clearfix'></div>
					";
				}
			?>
    		</div>
    	<div class="col"></div>
  	</div>
</div>
</body>
</html>