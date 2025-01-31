<?php
include ''; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $users = read(); // Fetch all users
    $filteredUsers = array_filter($users, fn($u) => $u['id'] == $id);
    $user = !empty($filteredUsers) ? array_values($filteredUsers)[0] : null;

    if ($user === null) {
        echo "User not found.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
        if (update($_POST['id'], $_POST['name'], $_POST['email'])) {
            header("Location: index.php");
            exit; 
        } else {
            echo "Failed to update user.";
        }
    } else {
        echo "Invalid input data.";
    }
}
?>

<form method="POST" action="your_action.php"> 
    <input type="hidden" name="id" value="<?php echo isset($user['id']) ? htmlspecialchars($user['id']) : ''; ?>"> 
    <input type="text" name="name" value="<?php echo isset($user['name']) ? htmlspecialchars($user['name']) : ''; ?>" required>
    <input type="email" name="email" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>" required> 
    <input type="submit" value="Submit"> 
</form>