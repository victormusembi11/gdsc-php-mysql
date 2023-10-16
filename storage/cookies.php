<?php

$username = "johndoe";
$password = "secret";

setcookie("user", $username . ":" . $password, time() + 3600);

if (!isset($_COOKIE['user'])) {
    echo "User is not logged in.";
} else {
    echo "User is logged in.";
}
