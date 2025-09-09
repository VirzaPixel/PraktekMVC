<?php 

include "connect.php";
include "controllers/UserController.php";

$c = new UserController($conn);
$c->index();

?>