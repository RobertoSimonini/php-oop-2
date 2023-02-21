<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{

    public $ingredients;
    public $format;

    public function __construct($name, $price, $description, Category $category, $img, $ingredients, $format)
    {
        parent::__construct($name, $price, $description, $category, $img);

        $this->ingredients = $ingredients;
        $this->format = $format;
    }
}
