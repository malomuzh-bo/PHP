<?php
include_once 'product2.php';
class Monitor extends Product2 {
    public $diagonal;
    public $frequency;
    public $ports;

    public function __construct($name, $info, $brand, $diagonal, $frequency, $ports) {
        $this -> name = $name;
        $this -> info = $info;
        $this -> brand = $brand;
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