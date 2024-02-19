<?php
require_once __DIR__ . '/product.php';

class Kennel extends Product
{
    public function __construct(string $nameKennel, float $price)
    {
        $this->title = $nameKennel;
        $this->price = $price;
    }
}

$kennelOne = new Kennel(
    'Casa Accogliente a Zampe',
    20.50
);
$kennelOne->image = '<img alt="cuccia-cane" src="https://m.media-amazon.com/images/I/81mTYtNJ0dL.jpg">';
