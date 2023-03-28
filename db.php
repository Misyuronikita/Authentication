<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";

$connection = mysqli_connect($server, $username, $password, $dbname);

if(!$connection){
    die("Connection Failed".mysqli_connect_error());
}
