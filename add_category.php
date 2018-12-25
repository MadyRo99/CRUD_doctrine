<?php
require_once ("connection.php");

$category = new Categories();
$category->setName("Politic");
$entityManager->persist($category);
$entityManager->flush();

$category = new Categories();
$category->setName("IT");
$entityManager->persist($category);
$entityManager->flush();

$category = new Categories();
$category->setName("Sport");
$entityManager->persist($category);
$entityManager->flush();

$category = new Categories();
$category->setName("Monden");
$entityManager->persist($category);
$entityManager->flush();

$category = new Categories();
$category->setName("Stiri");
$entityManager->persist($category);
$entityManager->flush();