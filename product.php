<?php
// Prodotti per animali
class Product
{
    // Proprietà presenti nel singolo prodotto ché in categoria
    public $title;
    public $image;
    public $price;
    public $categoryIcon;

    // Funzione per settare l'icona del prodotto
    public function setCategoryIcon($animal)
    {
        if ($animal == 'dog') {
            $this->categoryIcon = '<img alt="dog-icon" src="https://st3.depositphotos.com/16184378/19237/v/450/depositphotos_192376910-stock-illustration-cute-french-bulldog-puppy-with.jpg">';
        } elseif (($animal == 'cat')) {
            $this->categoryIcon = '<img alt="dog-icon" src="https://us.123rf.com/450wm/surfupvector/surfupvector1908/surfupvector190800508/128516234-icona-della-linea-di-gattino-carino-piccolo-gatto-concetto-di-animale-domestico-pu%C3%B2-essere.jpg?ver=6">';
        }
    }

    // Funzione che mi setta l'immagine del prodotto
    public function setImageProduct($tagImg)
    {
        $this->image = $tagImg;
    }
}
