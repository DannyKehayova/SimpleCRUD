<?php /** @var $user Models\EditUserData */?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    Username: <input value="<?= $user->getName(); ?>" type="text" name="name"/><br/>
    First name:<input value="<?= $user->getFirstName(); ?>" type="text" name="first_name"/><br/>
    Second name:<input value="<?= $user->getSecondName(); ?>" type="text" name="second_name"/><br/>
    Third name:<input value="<?= $user->getThirdName(); ?>" type="text" name="third_name"/><br/>
    Age:<input value="<?= $user->getAge(); ?>" type="number" name="age"/><br/>
    <input type="submit" name="edit" value="Edit user"/>
</form>
</body>
</html>