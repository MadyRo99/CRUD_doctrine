<?php
	session_start();
	if (!isset($_SESSION['uid'])) header("Location: index.php");

	require_once ("../connection.php");

    $articles = new ArticlesImplement();
    $article = $articles->getArticle($_GET['uid_article']);
    if ($article == null) header("Location: index.php");
    $uid_user_article = $article->getUidUser();
    if ($uid_user_article != $_SESSION['uid']) header("Location: index.php");

	$categories = new CategoriesImplement();
	$categories = $categories->getAllCategories();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editeaza articol</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  	<div class="row">
	    <div class="col"></div>
			<div class="col-8">
			<a href="index.php">< Acasa</a>
			<h1 id="title-spacing">Editeaza articol</h1>
			<form action="process/articole_edit_process.php" method="GET">
				<div class="form-group">
					<input type='hidden' name='uid_article' value="<?php echo $_GET['uid_article']; ?>">
					<input class="form-control" id="title" type="text" name="title" placeholder="Titlu" value="<?php { echo $article->getTitle(); } ?>"><br>
					<p class="error_p" id="title_info" style="color: red;"></p>
					<select class="form-control" id="category" name="category">
						<option value="none">Alege categoria</option>
						<?php
						foreach ($categories as $category) {
							$categorie = $article->getCategory();
							if ($categorie == $category->getIdCategories()) {
								echo "<option value=".$category->getIdCategories()." selected='selected'>".$category->getName()."</option>";
							} else {
								echo "<option value=".$category->getIdCategories().">".$category->getName()."</option>";
							}
						} ?>
					</select><br>
					<p class="error_p" id="category_info" style="color: red;"></p>
					<textarea class="form-control" id="text" name="text" placeholder="Text"><?php {echo $article->getText();} ?></textarea><br>
					<p class="error_p" id="text_info" style="color: red;"></p>
					<input class="form-control" id="tags" type="text" name="tags" placeholder="Tags" value="<?php {echo $article->getTags();} ?>"><br>
					<p class="error_p" id="tags_info" style="color: red;"></p>
					<input class="btn btn-primary" type="submit" value="Salveaza articol"><br><br>
				</div>
			</form>
			<?php
				if (!isset($_GET['result'])) {
					if (isset($_GET['success']) && $_GET['success']) {
						echo '<div class="alert alert-success" role="alert">Articolul a fost modificat cu succes!</div>';
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