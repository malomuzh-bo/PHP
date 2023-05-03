<?php
include_once 'product.php';
class Monitor extends Product {
    public $diagonal;
    public $frequency;
    public $ports;

    function __construct($name, $price, $info, $brand, $diagonal, $frequency, $ports) {
        parent::__construct($name, $price, $info, $brand);
        $this -> diagonal = $diagonal;
        $this -> frequency = $frequency;
        $this -> ports = $ports;
    }

    public function GetProduct() {
        $parentProd = parent::GetProduct();
        return "{$parentProd}Diagonal: {$this -> diagonal}, Frequency: {$this -> frequency}, Ports: {$this -> ports}<br/>";
    }
}
?>