<?php

require_once 'Product.php';

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 7/24/17
 * Time: 10:52 AM
 */
class ProductDB
{
    public function getAll(){
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

        $query = "SELECT * FROM products";
        $rows =  $db->query($query);
        $products = [];
        foreach ($rows as $row) {
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $category_id = $row['category_id'];
            $product = new Product($id, $name, $description, $category_id);
            $products[] = $product;
        }
        return $products;
    }
}