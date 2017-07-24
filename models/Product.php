<?php

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 7/24/17
 * Time: 10:51 AM
 */
class Product
{
    public $id;
    public $name;
    public $description;
    public $category_id;

    public function __construct($id, $name, $description, $category_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->category_id = $category_id;
    }
}