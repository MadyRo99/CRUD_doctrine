<?php
session_start();
$category_options = [1, 2, 3, 4, 5];
if (!isset($_SESSION['uid'])) header("Location: ../index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['uid_article']) && !empty($_GET['uid_article'])) {
        $data['uid_article'] = $_GET['uid_article'];
    }
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
    $uid_user_article = $article->getUidUserArticle($data['uid_article']);
    if ($uid_user_article == null) header("Location: ../index.php");

    if ($uid_user_article == $_SESSION['uid']) {
        $result = $article->updateArticle($data);
        if ($result['result'] == 'true') {
            header('Location: ../articole_edit.php?uid_article='.$data['uid_article'].'&success=true');
        } else {
            $result = json_encode($result['errors']);
            header('Location: ../articole_edit.php?uid_article='.$data['uid_article'].'&success=false&result='.$result);
        }
    } else {
        header("Location: ../index.php");
    }
}