<?php
include'../config/database.php';

function create($name, $email){
    global $conn;
    $stmt= $conn->prepare("INSERT INTO users(name,email) VALUES(?,?)");
    $stmt->bind_param("ss", $name, $email);
    return $stmt->execute();
}

function read($name, $email){
    global $conn;
    $result=$conn->query("SELECT * FROM users");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function update($id, $name, $email){
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    return $stmt->execute();
}

function delete($id){
    global $conn;
    $stmt= $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>