<?php
require_once 'app.php';


$data=$userService->findAll();

$app->loadTemplate("users_frontend",$data);