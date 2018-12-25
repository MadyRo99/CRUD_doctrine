<?php
session_start();
if (!isset($_SESSION['id'])) header("Location: ../index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['uid_article']) && !empty($_GET['uid_article'])) {
        $uid_article = $_GET['uid_article'];
    }

    $article = new ArticlesImplement();
    $uid_user_article = $article->getUidUserArticle($uid_article);

    if ($uid_user_article == null) header("Location: ../index.php");

    if ($uid_user_article == $_SESSION['id']) {
        $article->deleteArticle($uid_article);
    }

    header("Location: ../index.php");
}