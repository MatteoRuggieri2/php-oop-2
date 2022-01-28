<?php 

class User {

    public $name;

    public $lastname;

    public $email;

    protected $creditCard;

    protected $basket;

    public function __construct($_name, $_lastname, $_email, $_creditCard) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->creditCard = $_creditCard;
    }

    public function getName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function toBuy($item) {
        $this->$basket[] = $item;
    }

    public function getBasket() {
        return $this->basket;
    }

}

?>