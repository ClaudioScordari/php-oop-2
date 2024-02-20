<?php
require_once __DIR__ . '/product.php';

class Category extends Product
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name; // il nome della categoria è cane o gatto
    }
}

$dog = new Category('🐶');
$cat = new Category('🐱');
