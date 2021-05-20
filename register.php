<?php include "db.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = password_hash($pass, PASSWORD_BCRYPT);
    if($login->register($name, $email, $password)){
        header("Location:postaniclan.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <h1>Registrujte se ovdje</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Ime</td>
                <td><input type="text" name="name"></td></tr><tr>
                <td>Email</td>
                <td><input type="email" name="email"></td></tr><tr>
                <td>Password</td>
                <td><input type="password" name="password"></td></tr><tr>
                <td></td>
                <td><input type="submit" name="submit" value="Registrujte se"></td>
            </tr>
        </table>
    </form>
</body>
</html>