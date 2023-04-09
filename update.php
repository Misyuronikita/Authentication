<?php
include "db.php";
$id = $_POST['id'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = "UPDATE users 
          SET login = '$login', email = '$email', password = '$password' 
          WHERE id = '$id'";
$result = mysqli_query($connection, $query);
mysqli_close($connection);
?>

<meta http-equiv="refresh" content="1; url = usersList.php">
