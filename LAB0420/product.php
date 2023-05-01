<?php
class Product{
    public $title;
    public $price;

    public function __construct($_title, $_price)
    {
        $this -> title = $_title;
        $this -> price = $_price;
    }

    public function GetProd(){
        echo "<p>Title: " . $this -> title . "</p><p>Price: $" . $this -> price . "</p>";
    }
    
    public function GetSearchProd(){
        echo "<p style='color: #'>Title: " . $this -> title . "</p><p>Price: $" . $this -> price . "</p>";
    }

    public function GetTitle() {
        return $this -> title;
    }
    
    public function GetPrice() {
        return $this -> price;
    }

    public static function SearchByName($products, $title) {
        foreach ($products as $product) {
            if ($product -> GetTitle() == $title) {
                return $product;
            }
        }
        return null;
    }
}
?>