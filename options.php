<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$isDevMode = true;
$paths = array("src/Entity");

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);

$dbParams = array(
		'driver' => 'pdo_mysql',
		'user' => 'root',
		'password' => '',
		'dbname' => 'doctrine_crud'
	);

$entityManager = EntityManager::create($dbParams, $config);