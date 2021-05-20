<?php 
session_start();
include "db.php";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($login->login($email, $password)){
        header("location:index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login11.css">
</head>
<body>

<div class="velikidiv">
    <p class="naslovzalog">Unesite email i password</p>
    <form action="" method="post">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td></tr><tr>
                <td>Password</td>
                <td><input type="password" name="password"></td></tr><tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login now"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>