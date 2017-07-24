<?php
//Routing
require_once './controllers/ProductController.php';

$productController = new ProductController();
$productController->getAll();
