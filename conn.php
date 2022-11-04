<?php
	$db_username = 'pdo123';
	$db_password = '';
	$conn = new PDO( 'mysql:host=localhost;dbname=voetbal', $db_username, $db_password,);
	if(!$conn){
		die("Fatal Error: Connection Failed!");   
	}
?>