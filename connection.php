<?php
require_once(__DIR__."/options.php");
require_once(__DIR__ . "/database.php");

spl_autoload_register(function ($name) {
    if (strstr($name,"Implementation")) include_once(__DIR__."/src/Implementations/".$name.".php");
});

//include_once('src/Entity/Users.php');

if (!isset($entityManager)) {
    $entityManager = Database::getConnection();
}