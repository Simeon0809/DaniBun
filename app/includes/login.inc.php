<?php

include "../database/databaseHandler.php";
include "../classes/model/login.model.php";
include "../classes/controller/login.contr.php";

if (isset($_POST["loginSubmit"])) {
    // Taking data from the fields
    $email = $_POST["userMail"];
    $password = $_POST["userPassword"];

    // Instantiate LoginContr class
    $login = new LoginContr($email, $password);

    // Running err handlers and user login
    $login->userLogin();

    // Redirecting to Login
    header("location: ../../public/public_html/dashboard.php?error=none");
    exit();
}
?>
