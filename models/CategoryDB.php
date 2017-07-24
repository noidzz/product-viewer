<?php
require_once 'Category.php';

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 7/24/17
 * Time: 10:59 AM
 */
class CategoryDB
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

        $query = "SELECT * FROM categories ORDER BY id";
        $rows = $db->query($query);
        $categories = [];
        foreach ($rows as $row) {
            $id = $row['id'];
            $name = $row['name'];
            $category = new Category($id, $name);
            $categories[] = $category;
        }
        return $categories;
    }

}