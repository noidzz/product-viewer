<?php 
	require 'database.php';

	$category_id = $_GET['category_id'];
	if (!isset($category_id)) {
		$category_id = 1;
	}

	$query = "SELECT * FROM categories WHERE  id = $category_id";
	$category = $db->query($query);
	$category = $category->fetch();

	$category_name = $category['name'];

	$query = "SELECT * FROM categories ORDER BY id";
	$categories = $db->query($query);

	$query = "SELECT * FROM products WHERE category_id = $category_id";
	$products =  $db->query($query);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>List products</h1>
	<div class="sidebar">
		<h2>Categories</h2>
		<ul class="nav">
			<?php foreach ($categories as $category) : ?> 
				<li>
					<a href="?category_id=<?php echo $category['id']; ?>">
						<?php echo $category['name']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="content">
		<h2><?php echo $category_name; ?></h2>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th class="right">Description</th>
			</tr>
			<?php foreach ($products as $product) { ?>
				<td><?php echo $product['id'] ?></td>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo $product['description'] ?></td>
				<td>
					<form action="delete_product.php" method="post">
						<input type="hidden" name="product_id"
							value="<?php echo $product['id']; ?>">
						<input type="submit" name="detele" value="Delete">
					</form>
				</td>
			<?php } ?>
		</table>
	</div>
</body>
</html>
