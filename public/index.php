<<<<<<< HEAD
                                                                                    
=======
<?php
include '../functions/crud.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users List</title>
    <link rel="stylesheet"href="../css/style.css">
</head>
<body>
    <h2>User List</h2>
    <a href="create.php">Add New User</a>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="update.php?id=<?= $user['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $user['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
>>>>>>> e8b8e75c4b223745e501cf183856569e90c46b67
