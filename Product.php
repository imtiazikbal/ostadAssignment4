<?php 

class Product{

    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice ($price){
        return '$' . number_format($price, 2);
    }
    public function showDetails (){
        echo "Product Details:" . PHP_EOL;
        echo "Product ID: {$this->id}" . PHP_EOL;
        echo "Product Name: {$this->name}" . PHP_EOL;
        echo "Product Price: {$this->getFormattedPrice($this->price)}" . PHP_EOL;
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();