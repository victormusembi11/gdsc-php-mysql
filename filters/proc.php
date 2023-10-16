<?php

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


function validate_username($username)
{
    if (empty($username)) {
        return array(false, "Username is empty");
    } else if (strlen($username) < 6) {
        return array(false, "Username is too short. Must be longer than 6 characters");
    } else if (strlen($username) > 12) {
        return array(false, "Username is too long. Must be shorter than 12 characters");
    } else if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        return false;
    }

    return true;
}

function validate_email($email)
{
    if (empty($email)) {
        return array(false, "Email is empty");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return array(false, "Email is invalid");
    }

    return true;
}

// if the form is valid the status is true, else it's false
$form_status = true;

$form_errors = "?";
$form_data = "&username=$username&email=$email";

$user_validator = validate_username($username);

if ($user_validator[0] == false) {
    $form_errors .= "username_error=" . $user_validator[1];
    $form_status = false;
}

$email_validator = validate_email($email);

if ($email_validator[0] == false) {
    $form_errors .= "&email_error=" . $email_validator[1];
    $form_status = false;
}

if ($form_status) {
    header("Location: success.php");
    exit();
} else {
    header("Location: form.php$form_errors$form_data");
}
