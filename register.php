<?php
include('db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];
$email = $_POST['email'];

if(empty($login) || empty($email) || empty($password) || empty($repeatPassword))
{
    echo "You need to fill all fields";
}
else
{
    if($password !== $repeatPassword){
        echo "Password don't match. Fix it";
    }
    else{
        $sql = "INSERT INTO `users` (login, password, email) VALUES ('$login', '$password', '$email')";
        if($connection->query($sql)){
            echo "User signed up successfully";
        }
        else{
            echo "Error: " . $connection->error;
        }
    }
}