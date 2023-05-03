<?php
include_once 'product.php';
class Phone extends Product {
    public $cpu;
    public $ram;
    public $countSim;
    public $hdd;
    public $os;

    function __construct($_name, $_price, $_info, $_brand, $_cpu, $_ram, $_countSim, $_hdd, $_os) {
        parent::__construct($_name, $_price, $_info, $_brand);
        $this -> cpu = $_cpu;
        $this -> ram = $_ram;
        $this -> countSim = $_countSim;
        $this -> hdd = $_hdd;
        $this -> os = $_os;
    }

    public function GetProduct() {
        $parentProd = parent::GetProduct();
        return "{$parentProd}CPU: {$this -> cpu}, RAM: {$this -> ram}<br/>Count SIM: {$this -> countSim}, HDD: {$this -> hdd}<br/>OS: {$this -> os}<br/>";
    }
}
?>