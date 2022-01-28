<?php 

class Product{

    public $name;

    public $price;

    public $quantity;

    public $vote;

    public function __construct($_name, $_price, $_quantity) {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }
        
}

?>