<?php

include __DIR__ . "/../db_conn.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

// would fetch from url
$email = "johndoe@example.com";


$sql = "UPDATE Users SET FirstName = '$first_name', LastName = '$last_name' WHERE EmailAddress = '$email'";
$conn->query($sql);

echo "User updated successfully";
