<?php /** @var $data \Models\AllUsersViewData[] */ ?>

<table border="1" cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th>Username</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Third name</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $user): ?>
        <tr>

            <td><?= $user->getName();?></td>
            <td><?= $user->getFirstName();?></td>
            <td><?= $user->getSecondName();?></td>
            <td><?= $user->getThirdName();?></td>
            <td><?= $user->getAge();?></td>
            <td>
                <a href="edit.php?id=<?= $user->getId(); ?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?id=<?= $user->getId(); ?>">Delete</a>
            </td>
            <td></td>
        </tr>

    <?php endforeach;?>

    </tbody>
</table>
