<?php
include_once 'input.php';
class Button extends Input{
    private $isSubmit;

    function __construct($_background, $_width, $_height, $_name, $_value, $_isSubmit)
    {
        $this -> SetBackground($_background);
        $this -> SetWidth($_width);
        $this -> SetHeight($_height);
        $this -> SetName($_name);
        $this -> SetValue($_value);
        //parent::__construct($_background, $_width, $_height, $_name, $_value);
        $this -> isSubmit = $_isSubmit;
    }

    function GetSubmitState(){
        return $this -> isSubmit;
    }
    
    function SetSubmitState(){
        $this -> isSubmit = true;
    }

}
?>