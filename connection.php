<?php
require_once(__DIR__."/options.php");
require_once(__DIR__ . "/database.php");

spl_autoload_register(function ($name) {
    if (strstr($name,"Implement")) include_once(__DIR__."/src/Implementations/".$name.".php");
});

include_once('src/Entity/Users.php');
include_once('src/Entity/Articles.php');
include_once('src/Entity/Categories.php');

if (!isset($entityManager)) {
    $entityManager = Database::getConnection();
}