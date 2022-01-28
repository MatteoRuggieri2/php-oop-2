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

    public function getVote() {
        return $this->vote . '/5';
    }

    public function getPrice() {
        $formattedPrice = number_format( $this->price, 2);
        return $formattedPrice . '€';
    }
        
}

?>