<?php
require_once __DIR__ . '/product.php';

class Food extends Product
{
    public $ingredients; // ingredienti
    public $digestibility; // digeribilità

    public function __construct(string $nameFood, float $price)
    {
        $this->title = $nameFood;
        $this->price = $price;
    }
}

$foodOne = new Food(
    'ZampaFelice Bocconcini al Pollo',
    6.50
);
$foodOne->image = '<img alt="immagine_croccantini" src="https://media.istockphoto.com/id/483452891/it/foto/cibo-per-animali-domestici.jpg?s=612x612&w=0&k=20&c=TrLVzTAt3VZXcbO70T9Eea5T1zjZHwRLdvPFZeMyEC0=">';
