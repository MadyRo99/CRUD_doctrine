<?php
session_start();
if (!isset($_SESSION['id'])) header("Location: ../index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['title']) && !empty($_GET['title'])) {
        $data['title'] = $_GET['title'];
    }
    if (isset($_GET['category']) && !empty($_GET['category'])) {
        $data['category'] = $_GET['category'];
    }
    if (isset($_GET['text']) && !empty($_GET['text'])) {
        $data['text'] = $_GET['text'];
    }
    if (isset($_GET['tags']) && !empty($_GET['tags'])) {
        $data['tags'] = $_GET['tags'];
    }

    $data['uid_user'] = $_SESSION['id'];
    $article = new ArticlesImplement();
    $result = $article->AddArticle($data);

    if ($result['result'] == 'true') {
        header('Location: ../articole_add.php?success=true');
    } else {
        $result = json_encode($result['errors']);
        header('Location: ../articole_add.php?success=false&result='.$result);
    }

}