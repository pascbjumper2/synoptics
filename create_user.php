<?php
// create_product.php
require_once "bootstrap.php";

$newUserEmail = $argv[1];
$newUserPassword = $argv[2];

$user = new User();
$user->setEmail($newUserEmail);
$user->setPassword($newUserPassword);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";
?>
