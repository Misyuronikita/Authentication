<?php
include "db.php";
$id = $_GET['id'];
$query = "SELECT *
          FROM users
          WHERE id = $id";
$result = mysqli_query($connection, $query);
mysqli_close($connection);
$fetch = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EDIT</title>
</head>
<body>
<h2>
    <?="Edit $fetch[1]"?>
</h2>
<form>
    <div class="form-group">
        <label>New Login</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
        <small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">New Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">New Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>


