<?php
require_once __DIR__ . '/product.php';

class Category extends Product
{
    public $nameCategory;

    public function __construct($name)
    {
        $this->nameCategory = $name; // il nome della categoria è cane o gatto
    }
}

$dog = new Category('dog');
$cat = new Category('cat');
