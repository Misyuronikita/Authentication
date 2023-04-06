
<?php
include "db.php";

$query = "SELECT login, email
          FROM users ORDER BY login";

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
    $login = $user[0];
    $email = $user[1];
    echo "<b>LOGIN</b>:$login".'<br>'.
         "<b>EMAIL</b>:$email".'<br>'.'<br>';
}
?>
</body>
</html>