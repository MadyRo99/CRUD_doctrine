<?php
session_start();
if (!isset($_SESSION['uid'])) header("Location: ../index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search = $_GET['search'];
    }

    $article = new ArticlesImplement();
    $results = $article->searchArticles($search);
    print("<pre>".print_r($results, true)."</pre>");

}