<?php
include_once 'control.php';
class Input extends Control{
    private $name, $value;

    public function __construct($_background, $_width, $_height, $_name, $_value)
    {
        parent::__construct($_background, $_width, $_height);
        $this -> SetName($_name);
        $this -> SetValue($_value);
    }

    function GetName(){
        return $this -> name;
    }
    function GetValue(){
        return $this -> value;
    }

    function SetName($_name){
        $this -> name = $_name;
    }
    function SetValue($_value){
        $this -> value = $_value;
    }
}
?>