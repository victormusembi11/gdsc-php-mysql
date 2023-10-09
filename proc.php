<?php

include "db_conn.php";

if (!isset($_POST["submit"])) {
    echo "Button not clicked";
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];


$sql = "INSERT INTO Users (FirstName, LastName, EmailAddress) VALUES ('$first_name', '$last_name', '$email')";
$conn->query($sql);
