<?php 
	$product_id = $_POST['product_id'];
	require_once('database.php');

	$query = "DELETE FROM products WHERE id = '$product_id'";
	$db->exec($query);

	include('index.php');
?>