<?php

include __DIR__ . "/../db_conn.php";


$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];


$sql = "INSERT INTO Users (FirstName, LastName, EmailAddress) VALUES ('$first_name', '$last_name', '$email')";
$conn->query($sql);

echo "User created successfully";
