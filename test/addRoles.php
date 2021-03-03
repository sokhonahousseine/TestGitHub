<?php
require_once '../bootstrap.php';
$role=new Roles(1,'kl');
$entityManager->persist($roles);
$entityManager->flush();
?>