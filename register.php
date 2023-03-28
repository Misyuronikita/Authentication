<?php
include('db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];
$email = $_POST['email'];


$sql = "INSERT INTO `users` (login, password, email) VALUES ('$login', '$password', '$email')";
$connection->query($sql);