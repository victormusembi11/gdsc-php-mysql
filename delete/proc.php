<?php

include __DIR__ . "/../db_conn.php";

$email = $_POST["email"];

$sql = "DELETE FROM Users WHERE EmailAddress = '$email'";
$conn->query($sql);

echo "User deleted successfully";
