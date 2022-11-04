<?php
session_start();
include 'conn.php';

if(ISSET($_POST['update']))
if($_POST['email'] != "" || $_POST['voornaam']|| $_POST['wachtwoord'] != ""){
    try{
        $email = $_POST['email'];
        $voornaam = $_POST['voornaam'];
        $wachtwoord = $POST['wachtwoord'];
 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = $conn->prepare("UPDATE users
        SET ,  
        WHERE ");
        $sql->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
}else{
    echo "
        <script>alert('Please fill up the required field!')</script>
        <script>window.location = 'registreren.php'</script>
    ";
}


?>