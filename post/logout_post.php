<?php
$domain = $_SERVER['DOCUMENT_ROOT'];
include($domain . "/controller/UsersController.php");
$usersController = new UsersController();
$var = $usersController->logout();

print_r(json_encode($var));