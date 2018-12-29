<?php
session_start();
if (isset($_SESSION['uid'])) header("Location: index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['uid'])) {

    if (isset($_POST['usem'])) {
        $data['usem'] = $_POST['usem'];
    }
    if (isset($_POST['password'])) {
        $data['password'] = $_POST['password'];
    }

    $user = new UsersImplement();
    $user = $user->login($data);
    header("Location: ../index.php?success=".$user);

}