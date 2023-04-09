
<?php
include "db.php";

$query = "SELECT *
          FROM users";

$result = mysqli_query($connection, $query);
$users = mysqli_fetch_all($result);
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>List</title>
</head>
<body>
<h1>List of users</h1>
<?php
foreach ($users as $key => $user){
    $id = $user[0];
    $login = $user[1];
    $password = $user[2];
    $email = $user[3];
    echo "<button><a href='edit.php?id=$id'><b>EDIT</b></a><br></button><br>
          <a><b>LOGIN</b>:$login</a><br>
          <a><b>EMAIL</b>:$email</a><br>
          <a><b>PASSWORD</b>:$password</a><br>
          <form action='delete.php' method='post'>
          <input type='hidden' name='id', value='$id'>
          <input type='submit' value='DELETE'><br><br><br>     
          </form>
         ";
}
?>
</body>
</html>