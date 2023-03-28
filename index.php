<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="post">
    <input type="text" placeholder="Login" name="login">
    <input type="text" placeholder="Password" name="password">
    <input type="text" placeholder="Repeat Password" name="repeatPassword">
    <input type="text" placeholder="Email" name="email">
    <button type="submit">Sign Up</button>
</form>

<form action="login.php" method="post">
    <input type="text" placeholder="Login" name="login">
    <input type="text" placeholder="Password" name="password">
    <button type="submit">Sign In</button>
</form>

</body>
</html>