<?php
>$conn = new mysql('localhost', 'root', '', 'crud_db');

if ($conn->connect_error) {
    die("connection error: " . $conn->connect_error);
}
