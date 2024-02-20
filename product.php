<?php
// Prodotti per animali
class Product
{
    // Proprietà presenti nel singolo prodotto ché in categoria
    public $title;
    public $image;
    public $price;
    public $category;

    // Funzione che mi setta l'immagine del prodotto
    public function setImageProduct($img)
    {
        $this->image = $img;
    }
}
