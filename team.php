<?php
require_once 'conn.php';
session_start();
?>
<H1>Teams</H1>
<!DOCTYPE html>
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
            <?php
                $id = $_SESSION['user'];
                $stmt = $conn->prepare("SELECT * FROM `users` ");
                $stmt->execute();
                $fetch = $stmt->fetch();
                
            ?>

            <div class="col-md-6 offset-md-4">
                <div class="profile_view">
                    <div class="profile_image">
                       
                    </div>
                    <div class="profile_detials">
                        <h3><?php echo $fetch['voornaam']?></h3>
                        
                    </div>
                    <?php
                    $sql = 'SELECT * FROM users';

                    try{
                        $stmt = $conn->query($sql);
                        
                        if($stmt === false){
                        die("Error");
                        }
                        
                    }catch (PDOException $e){
                        echo $e->getMessage();
                    }
                ?>
                <table width="100%">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Team</th>
                            <th>Goals</th>
                            <th>Assits</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <tr>
                               
                                <td><?php echo ($row['voornaam']); ?></td>
                                <td><?php echo ($row['goals']); ?></td>
                                <td><?php echo ($row['assists']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                    <div class="profile_buttons">
                        <div id="dislike"><a href="profielen.php" class="trigger"><i class="fa-solid fa-thumbs-down"></i></a></div>
                        <div id="like"><a href="chat.php" class="trigger"><i class="fa-solid fa-thumbs-up"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>