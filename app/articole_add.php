<?php
	session_start();
	if (!isset($_SESSION['uid'])) header("Location: index.php");

	require_once ("../connection.php");
	$categories = new CategoriesImplement();
	$categories = $categories->getAllCategories();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adauga articol</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  	<div class="row">
	    <div class="col"></div>
			<div class="col-8">
			<a href="index.php">< Acasa</a>
			<h1 id="title-spacing">Adauga articol</h1>
			<form action="process/articole_add_process.php" method="GET">
				<div class="form-group">
					<input class="form-control" id="title" type="text" name="title" placeholder="Titlu"><br>
					<p class="error_p" id="title_info" style="color: red;"></p>
					<select class="form-control" id="category" name="category">
						<option value="none">Alege categoria</option>
						<?php
						foreach ($categories as $category) {
							echo "<option value=".$category->getIdCategories().">".$category->getName()."</option>";
						} ?>
					</select><br>
					<p class="error_p" id="category_info" style="color: red;"></p>
					<textarea class="form-control" id="text" name="text" placeholder="Text"></textarea><br>
					<p class="error_p" id="text_info" style="color: red;"></p>
					<input class="form-control" id="tags" type="text" name="tags" placeholder="Tags"><br>
					<p class="error_p" id="tags_info" style="color: red;"></p>
					<input class="btn btn-primary" type="submit" value="Adauga articol"><br><br>
				</div>
			</form>
			<?php
				if (!isset($_GET['result'])) {
					if (isset($_GET['success']) && $_GET['success']) {
						echo '<div class="alert alert-success" role="alert">Articolul a fost adaugat cu succes!</div>';
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
<script src="scripts/article_validation.js"></script>
</body>
</html>