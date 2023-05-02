<?php
include_once 'product2.php';
class Phone extends Product2 {
    public $cpu;
    public $ram;
    public $countSim;
    public $hdd;
    public $os;

    public function __construct($name, $info, $brand, $cpu, $ram, $countSim, $hdd, $os) {
        $this -> name = $name;
        $this -> info = $info;
        $this -> brand = $brand;
        $this -> cpu = $cpu;
        $this -> ram = $ram;
        $this -> countSim = $countSim;
        $this -> hdd = $hdd;
        $this -> os = $os;
    }

    public function GetProduct() {
        $parentProd = parent::GetProduct();
        return "{$parentProd}CPU: {$this -> cpu}, RAM: {$this -> ram}<br/>Count SIM: {$this -> countSim}, HDD: {$this -> hdd}<br/>OS: {$this -> os}<br/>";
    }
}
?>