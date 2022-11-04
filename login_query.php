<?php
session_start();
require_once 'conn.php';
if(ISSET($_POST['login']))
// if (isset($_POST['login'])) {
      
// 	// Storing name in $name variable
// 	$email = $_POST['email'];
	
// 	// Storing google recaptcha response
// 	// in $recaptcha variable
// 	$recaptcha = $_POST['g-recaptcha-response'];
  
// 	// Put secret key here, which we get
// 	// from google console
// 	$secret_key = 'your_secret_key';
  
// 	// Hitting request to the URL, Google will
// 	// respond with success or error scenario
// 	$url = 'https://www.google.com/recaptcha/api/siteverify?secret='
// 		  . $secret_key . '&response=' . $recaptcha;
  
// 	// Making request to verify captcha
// 	$response = file_get_contents($url);
  
// 	// Response return by google is in
// 	// JSON format, so we have to parse
// 	// that json
// 	$response = json_decode($response);
  
// 	// Checking, if response is true or not
// 	if ($response->success == true) {
// 		echo '<script>alert("Google reCAPTACHA verified")</script>';
// 	} else {
// 		echo '<script>alert("Error in Google reCAPTACHA")</script>';
// 	}
// }

{
		if($_POST['email'] != "" || $_POST['wachtwoord'] != ""){
			$email = $_POST['email'];
			$wachtwoord = md5($_POST['wachtwoord']);
			$sql = "SELECT * FROM `users` WHERE `email`=? AND `wachtwoord`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($email,$wachtwoord));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION["email"] = $fetch["email"];
				$_SESSION['user'] = $fetch['user_id'];
              
				header("location: profiel.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>a
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
	
?>   $_SESSION['level'] = $qry['level'];
if($query['level']=="Admin"){
	header("location:home_admin.php");
}else if($query['level']=="user"){
	header("location:home_user.php");