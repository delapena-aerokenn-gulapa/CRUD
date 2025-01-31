<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("INSERT INTO users (name, email, age) VALUES (:name, :email, :age)");
    $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
</head>
<body>
    <h1>Add New User</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Age:</label>
        <input type="number" name="age" required><br>
        <button type="submit">Save</button>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>