<?php
include 'db.php';
$id = $_POST['id'];
$query = "DELETE 
          FROM users 
          WHERE id = '$id'";
$result = mysqli_query($connection, $query);
mysqli_close($connection);
?>

<meta http-equiv="refresh" content="1; url = usersList.php">
