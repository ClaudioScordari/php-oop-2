<?php
require_once __DIR__ . '/product.php';

class Category extends Product
{
    public $nameCategory;

    public function __construct($name)
    {
        $this->nameCategory = $name;
    }
}

$dog = new Category('cane');
$cat = new Category('gatto');
