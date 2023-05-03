<?php
include_once 'cart.php';
class Session extends Cart{
    public $productList;
    public $sessionId;
    public $sessionDateTime;

    function __construct() {
        $this -> productList = array(); 
        $this -> sessionId = rand(1000, 9999);
        $this -> sessionDateTime = new DateTime();
    }

    public function GetCart()
    {
        return $this -> productList;
    }
    public function AddToCart($prod)
    {
        array_push($this -> productList, $prod);
    }

    public function IsSessionAlive($sessionDate)
    {
        $sessionDate = new DateTime();
        $interval = $sessionDate -> diff($this -> sessionDateTime);
        ($interval -> h) > 5 ? false : true;
    }
}
?>