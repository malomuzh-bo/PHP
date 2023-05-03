<?php
class Product {
    public $name;
    public $price;
    public $info;
    public $brand;

    function __construct($_name, $_price, $_info, $_brand)
    {
        $this -> name = $_name;
        $this -> price = $_price;
        $this -> info = $_info;
        $this -> brand = $_brand;
    }

    public function GetProduct() {
        return "<p>Product: {$this -> name}</p><p>Price: \${$this -> price}</p>Info: {$this -> info}<br/>Brand: {$this -> brand}<br/>";
    }
}
?>