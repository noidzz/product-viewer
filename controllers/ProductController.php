<?php

require './models/ProductDB.php';

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 7/24/17
 * Time: 11:03 AM
 */
class ProductController
{
    public function getAll(){
        $productDb = new ProductDB();
        $products = $productDb->getAll();
        include './views/products/list.php';
    }
}