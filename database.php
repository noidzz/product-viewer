<?php 
$con = 'mysql:host=localhost;dbname=e-shop';
$username = 'root';
$password = 'kunngok';

try {
	$db = new PDO($con, $username, $password);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('database_error.php');
	exit();
}

?>