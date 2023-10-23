<?php

// get the cookie
$user_cookie = $_COOKIE["user"] ?? null;

// destroy the cookie
setcookie("user", "", time() - 3600, "/");

// redirect to login.php
header("Location: form.php");
