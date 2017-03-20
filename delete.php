<?php
require_once 'app.php';

if (isset($_GET['id'])) {
    $userService->deleteUser(intval($_GET['id']));
    header("Location: users.php");
}