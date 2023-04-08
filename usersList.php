
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
    echo "<a href='edit.php?id=$id'><b>ID</b>:$id</a><br>
          <a><b>LOGIN</b>:$login</a><br>
          <a><b>EMAIL</b>:$email</a><br>
          <a><b>PASSWORD</b>:$password</a><br><br>";
}
?>
</body>
</html>