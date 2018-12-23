<?php
session_start();
if (isset($_SESSION['id'])) header("Location: index.php");

require_once ('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['name']) && ctype_alpha($_POST['name'])) {
        $data['name'] = $_POST['name'];
    }
    if (isset($_POST['username']) && strlen($_POST['username']) >= 6) {
        $data['username'] = $_POST['username'];
    }
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $data['email'] = $_POST['email'];
    }
    if (isset($_POST['password']) && strlen($_POST['password']) >= 6) {
        $data['password'] = $_POST['password'];
    }

    $user = new UsersImplement();
    $result = $user->Register($data);

    if ($result['result'] == 'true') {
        header('Location: ../signup.php?success=true');
    } else {
    	$result = json_encode($result['errors']);
    	header('Location: ../signup.php?success=false&result='.$result);
    }

}