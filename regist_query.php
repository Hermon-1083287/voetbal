<?php
require_once 'conn.php';

if(ISSET($_POST['register'])){
    if($_POST['voornaam']!= "" || $_POST['email'] != "" || $_POST['wachtwoord'] != ""){
        try{
            $voornaam = $_POST['voornaam'];
            $email = $_POST['email'];
            $wachtwoord = md5($_POST['wachtwoord']);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `users` (user_id, voornaam, email, wachtwoord) VALUES ('$id', '$voornaam',  '$email', '$wachtwoord')";
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    header('location:index.php');
}
?>