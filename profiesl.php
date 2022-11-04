<?php
session_start();
include 'conn.php';
?>
<?php
        // $id = $_SESSION['user'];
        // $sql = $conn->prepare("SELECT * FROM `users` WHERE `user_id`='$id'");
        // $sql->execute();
        // $fetch = $sql->fetch();

        // if(ISSET($_POST['update'])){
        //     if($_POST['email'] != "" || ['voornaam'] != ""||['wachtwoord'] != ""){
        //         try{
        //             $email = $_POST['email'];
        //             $voornaam = $_POST['voornaam'];
        //             $wachtwoord = $_POST['wachtwoord'];

                    
        //             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //             $sql = "UPDATE users SET , voornaam='$voornaam', , , email='$email', wachtwoord='$wachtwoord' WHERE user_id='$user_id'";
        //             $conn->exec($sql);
        //         }catch(PDOException $e){
        //             echo $e->getMessage();
        //         }
        //         $_SESSION['message']=array("text"=>"Hond succesvol geupdate!","alert"=>"info");
        //         $conn = null;
        //         header('location:profiel.php');
                
        //     }else{
        //         echo "
        //             <script>alert('Vul alle velden in!')</script>
        //             <script>window.location = 'index.php'</script>
        //         ";
        //     }
        // }
       
        
    ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    

    <section class="main">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h3 class="profile_name">
                        <strong><?php echo $fetch['voornaam'] . " " ?></strong></h3>
                </div>
            </div>
            <a href="home.php">Home</a>
            <form method="POST" class="">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                    <form action="" method="$_POST">
                        <table>
                            <tr>
                                <td style="width: 25%;">E-mailadres</td>
                                <div class="form-group">
                                <td><input type="text" name="email"
                                        value=<?php echo $fetch['email']?>></td>
                                </div>
                            </tr>
                            <tr>
                                <td>Voornaam</td>
                                <div class="form-group">
                                <td><input type="text" name="voornaam"
                                        value=<?php echo $fetch['voornaam']?>></td>
                                </div>
                            </tr>
                            <tr>
                                <td>goals</td>
                                <td><input type="text" name="goals"
                                        value=<?php echo $fetch['goals']?>></td>

                            </tr>
                            <tr>
                                <td>assits</td>
                                <td><input type="text" name="assits"
                                        value=<?php echo $fetch['assists']?>></td>
                            </tr>
                            <tr>

                                <td>Wachtwoord</td>
                                <div class="form-group">
                                <td><input type="password" name="wachtwoord"
                                        value=<?php echo $fetch['wachtwoord']?>></td>
                                </div>
                            </tr>
                        </table>
                        <div class="form-group">
                            <!-- <input type="submit" name="update" value="Update" class="form_update_button"> -->
                            <button class="btn btn-primary form-control" name="update"
                                    style="background-color:#43c131;width:100px;">updaten</button>
                        </div>
                        </form> 
                    </div>
                </div>
            </form>

            
            
            
            </div>
        </div>
    </section> -->

</body>
<?php
// if(ISSET($_POST['update'])){
        //     if($_POST['email'] != ""){
        //         try{
        //             $email = $_POST['email'];
        //             $voornaam = $_POST['voornaam'];
        //             $goals = $_POST['goals'];
        //             $assists = $_POST['assits'];
        //             $wachtwoord = md5($_POST['wachtwoord']);
    
        //             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
        //             // $sql = $conn->prepare("UPDATE users SET , WHERE ");
        //             $sql = $conn->prepare("UPDATE users SET email='$email',voornaam='$voornaam', goals='$goals', assists='$assists',WHERE user_id='$id'");
        //             $sql->execute();
                  

        //         }catch(PDOException $e){
        //             echo $e->getMessage();
        //         }
        //         $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
        //     }else{
        //         echo "
        //             <script>alert('Please fill up the required field!')</script>
        //             <script>window.location = 'registreren.php'</script>
        //         "; -->
        //     }
        // }
        // ?>
</html> 
