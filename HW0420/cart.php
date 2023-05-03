<?php
abstract class Cart{
    protected $productList;
    function __construct()
    {
        $this -> productList = array();
    } 
    abstract public function GetCart();
    abstract public function AddToCart($prod);
}


?>