<?php
class Product2 {
    public $name;
    public $price;
    public $info;
    public $brand;

    public function GetProduct() {
        return "Product: {$this -> name}<br/>Price: {$this -> price}<br/>Info: {$this -> info}<br/>Brand: {$this -> brand}<br/>";
    }
}
?>