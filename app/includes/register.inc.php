<?php

include "../database/databaseHandler.php";
include "../classes/model/register.model.php";
include "../classes/controller/register.contr.php";

if (isset($_POST["registerSubmit"])) {
    // Taking data from the fields
    $username = $_POST["username"];
    $email = $_POST["userMail"];
    $password = $_POST["userPassword"];
    $passwordRepeat = $_POST["userPasswordRepeat"];

    // Instantiate RegisterContr class
    $register = new RegisterContr($username, $email, $password, $passwordRepeat);

    // Running err handlers and user register
    $register->userRegister();

    // Redirecting to Login
    header("location: ../../public/public_html/auth/login.php?error=none");
    exit();
}
?>
