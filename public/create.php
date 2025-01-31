<?php
include '../functions/crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (create($_POST['name'], $_POST['email'])) {
        header("Location: index.php");
    } else {
        echo "Failed to create user.";
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Create now</button>
</form>