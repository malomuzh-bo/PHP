<?php
class Product {
    private $title, $count, $price;

    public function __construct($_title, $_count, $_price) {
        $this -> title = $_title;
        $this -> count = $_count;
        $this -> price = $_price;
    }

    public function getName() {
        return $this -> title;
    }

    public function getCount() {
        return $this -> count;
    }

    public function getPrice() {
        return $this -> price;
    }

    public function getTotal() {
        return $this -> count * $this -> price;
    }

    public function toArray() {
        return array(
            'title' => $this -> title,
            'count' => $this -> count,
            'price' => $this -> price,
            'total' => $this -> getTotal()
        );
    }
}
?>