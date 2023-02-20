<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Categories.php';

class Article extends Product
{
    public $name;

    public function __construct($price, $description, Categorie $categorie, $img, $name)
    {
        parent::__construct($price, $description, $categorie, $img);

        $this->name = $name;
    }
}


$croccantini = new Article('15€', 'Virtus Dog Adult Rustic, alimento secco completo per cani adulti di qualsiasi razza e taglia, ricco di materie prime di origine animale.', $dog, 'https://starpng.com/public/uploads/preview/dog-food-png-transparent-clipart-11582228802youfysa2yq.png', 'Virtus Dog Adult Rustic');
$larix = new Article('14.40€', 'Il tiragraffi Ottawa di Lovedì è un fantastico graffiatoio utile per far scaricare il tuo felino grazie alla pallina in peluche. Il graffiatoio ha una pallina situata', $cat, 'https://www.shutterstock.com/image-photo/beautiful-cat-scratching-post-600w-529038967.jpg', 'Tiragraffi Ottava');

$articles = [$croccantini, $larix];
