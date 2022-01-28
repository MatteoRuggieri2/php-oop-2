<?php 
require_once __DIR__ . '/Product.php';

class Clothes extends Product {

    public $size;

    // override
    public function __construct($_name, $_price, $_quantity, $_size) {
        parent::__construct($_name, $_price, $_quantity);
        $this->size = $_size;
    }

}

?>