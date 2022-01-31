<?php 

require_once __DIR__ . '/OrderInfo.php';

class User {
    
    use OrderInfo;

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
        $this->basket[] = $item;
    }

    public function getBasket() {
        $this->orderDate = getOrderDate();
        return $this->basket;
    }

    // public function encryptCreditCard() {
    //     $showedCharacters = 3;
    //     $stringLenght = strlen($this->creditCard);
    //     // $encriptedCreditCard = substr_replace( $this->creditCard, '*', -1);
    //     $charactersToReplace = $stringLenght - $showedCharacters;
    //     $encriptedCreditCard = 
    //     return $encriptedCreditCard;

    //     for($i = 0, $i < $showedCharacters, $i++) {

    //     }
    // }

}

?>