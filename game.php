<?php
require_once __DIR__ . '/product.php';

class Game extends Product
{
    public $safety; // sicurezza
    public $material; // materiale

    public function __construct(string $nameGame, float $price)
    {
        $this->title = $nameGame;
        $this->price = $price;
    }
}

$gameOne = new Game(
    'Palla rimbalzante',
    10.00
);
$gameOne->image = '<img alt="palla" src="https://m.media-amazon.com/images/I/51yZAEHEJZL.jpg">';
