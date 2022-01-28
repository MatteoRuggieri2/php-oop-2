<?php 
require_once __DIR__ . '/Product.php';

class Games extends Product {

    public $platform;

    // override
    public function __construct($_name, $_price, $_quantity, $_platform) {
        parent::__construct($_name, $_price, $_quantity);
        $this->platform = $_platform;
    }

}

?>