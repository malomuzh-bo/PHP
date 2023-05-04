<?php
include_once 'input.php';
class Button extends Input{
    private $isSubmit;

    public function __construct($_background, $_width, $_height, $_name, $_value, $_isSubmit)
    {
        parent::__construct($_background, $_width, $_height, $_name, $_value);
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