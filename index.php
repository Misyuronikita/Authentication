<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Authentication</title>
</head>
<body>
<?php
        include 'send.php';
        ?>
<h1>My project</h1><br>
<div class="form-container">
    <h2>Registration</h2>
<form action="register.php" method="post" name="registerContent">
    <div class="input-row">
        <label> Your Login <em>*</em>
            <input type="text" class="form-control" placeholder="Login" name="login" required>
        </label>
    </div>
    <div class="input-row">
        <label> Input your password <em>*</em>
            <input type="text" class="form-control" placeholder="Password" name="password" required>
        </label>
    </div>
    <div class="input-row">
        <label> Confirm your password <em>*</em>
        <input type="text" class="form-control" placeholder="Repeat Password" name="repeatPassword" required>
        </label>
    </div>
    <div class="input-row">
        <label> Send a message <em>*</em>
            <textarea class="form-control" name = "message" placeholder="Message" required></textarea>
        </label>
    </div>
    <div class="input-row">
        <label> Input your email <em>*</em>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
        </label>
    </div>
    <div class="btnSU">
    <button class="signUp" type="submit" name="send" value="Submit">Sign Up</button>
    </div>
</form>
</div>

<br><h2>Authorisation</h2>
<form action="login.php" method="post">
    <div class="form-group">
    <label> Input your login
    <input type="text" class="form-control" placeholder="Login" name="login">
    </label>
    </div>
        <div class="form-group">
    <label> Input your password
    <input type="text" class="form-control" placeholder="Password" name="password">
    </label>
        </div>
    <button type="submit">Sign In</button>
</form>
</body>
</html>