<?php
include('db.php');
$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    echo 'You need to fill all fields';
}
else{
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "You are welcome" . " " . $row['login'];
        }
    }
    else{
        echo "This user doesn't exist";
    }
}

