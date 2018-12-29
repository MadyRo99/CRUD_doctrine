<?php
session_start();
$category_options = [1, 2, 3, 4, 5];
if (!isset($_SESSION['uid'])) header("Location: ../index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['title']) && !empty($_GET['title'])) {
        $data['title'] = $_GET['title'];
    }
    if (isset($_GET['category']) && !empty($_GET['category'])) {
        if (in_array($_GET['category'], $category_options)) $data['category'] = $_GET['category'];
            else $data['category'] = null;
    }
    if (isset($_GET['text']) && !empty($_GET['text'])) {
        $data['text'] = $_GET['text'];
    }
    if (isset($_GET['tags']) && !empty($_GET['tags'])) {
        $data['tags'] = $_GET['tags'];
    }

    $article = new ArticlesImplement();

    $data['uid_user'] = $_SESSION['uid'];

    require_once('uid_generator.php');

    $data['uid_article'] = uid($article);

    $result = $article->addArticle($data);

    if ($result['result'] == 'true') {
        header('Location: ../articole_add.php?success=true');
    } else {
        $result = json_encode($result['errors']);
        header('Location: ../articole_add.php?success=false&result='.$result);
    }

}