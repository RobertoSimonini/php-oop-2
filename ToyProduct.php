<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{

    public $materials;
    public $color;

    public function __construct($name, $price, $description, Category $category, $img, $materials, $color)
    {
        parent::__construct($name, $price, $description, $category, $img);

        $this->materials = $materials;
        $this->color = $color;
    }
}
