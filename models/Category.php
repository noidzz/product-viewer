<?php

/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 7/24/17
 * Time: 10:50 AM
 */
class Category
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}