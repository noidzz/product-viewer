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
<div class="content">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class="right">Description</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product->id ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->description ?></td>
                <td>
                    <form action="views/delete_product.php" method="post">
                        <input type="hidden" name="product_id"
                               value="<?php echo $product->id; ?>">
                        <input type="submit" name="detele" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
