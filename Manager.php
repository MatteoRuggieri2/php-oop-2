<?php 
require_once __DIR__ . '/User.php';

class Manager extends User {

    private $discount;

    // override
    public function __construct($_name, $_lastname, $_email, $_creditCard, $_grade) {
        parent::__construct($_name, $_lastname, $_email, $_creditCard);
        $this->grade = $_grade;
        $this->setDiscount();
    }

    public function setDiscount() {
        if($this->grade === 'Senior') {
            $this->discount = 50;
        } else {
            $this->discount = 20;
        }
    }

}

?>