<?php
require_once 'app.php';
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $pass = $_POST['password']= password_hash($_POST['password'], PASSWORD_BCRYPT);
    $firstName=$_POST['first_name'];
    $secondName=$_POST['second_name'];
    $thirdName=$_POST['third_name'];
    $age=$_POST['age'];

    $userService = new \Services\UserService($db);


    if ($userService->exists($name)) {
        throw new Exception("Name already exists");
    }

    $userService->register($name, $pass,$firstName,$secondName,$thirdName,$age);
    header("Location: login.php");
    exit;
}
$app->loadTemplate("register_frontend");