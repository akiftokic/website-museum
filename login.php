<?php

class Login{
    private $database;
    function __construct($dbcon){
        $this->database = $dbcon;
    }
    public function register($name, $email, $password){
        try{
            $stmt = $this->database->prepare("INSERT INTO `registracija`.`clanovi` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');");
            $stmt->execute();
            return true;
        }
        catch(PDOException $ex){
            die($ex->getMessage());
            return false;
        }
    }
    public function login($email, $password){
        try{
            $stmt = $this->database->prepare("SELECT * FROM clanovi WHERE email=:email");
            $stmt->execute(array(":email" => $email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $row['password'])){
                session_regenerate_id();
                $_SESSION["authorized"]=true;
                $_SESSION["sess_name"]=$row['name'];
                session_write_close();
            }
            return true;
        }
        catch(PDOException $ex){
            die($ex->getMessage());
            return false;
        }
    }
}

?> 