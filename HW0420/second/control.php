<?php
class Control{
    private $background;
    private $width;
    private $height;

    public function __construct($_background, $_width, $_height)
    {
        $this -> SetBackground($_background);
        $this -> SetWidth($_width);
        $this -> SetHeight($_height);
    }

    function GetBackground(){
        return $this -> background;
    }
    function GetWidth(){
        return $this -> width;
    }
    function GetHeight(){
        return $this -> height;
    }

    function SetBackground($_background){
        $this -> background = $_background;
    }
    function SetWidth($_width){
        $this -> background = $_width;
    }
    function SetHeight($_height){
        $this -> background = $_height;
    }
}
?>