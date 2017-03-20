<?php

require_once 'app.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $user = $userService->getById($id);
}
$data = $userService->getIndexViewData();

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $firstName = $_POST['first_name'];
    $secondName = $_POST['second_name'];
    $thirdName = $_POST['third_name'];
    $age = $_POST['age'];

    $userService->editUser(intval($_GET['id']), $name, $firstName, $secondName, $thirdName, $age);
    header("Location: users.php");
}

$app->loadTemplate("edit_frontend", $data, $user);