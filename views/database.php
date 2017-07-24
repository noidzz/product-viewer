<?php 
$con = 'mysql:host=127.0.0.1;dbname=e-shop';
$username = 'root';
$password = 'secret';

try {
	$db = new PDO($con, $username, $password);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('database_error.php');
	exit();
}

?>