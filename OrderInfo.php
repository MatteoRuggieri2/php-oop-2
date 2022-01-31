<?php 

trait OrderInfo {
    public $orderDate;

    public $shipmentDate;

    public $numberOfProduct;

    public $totalPrice;



    public function getOrderDate() {
        $this->orderDate = 'oggi';
    }

}

?>