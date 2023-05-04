<?php
include_once 'input.php';
class Text extends Input{
    private $placeholder;

    public function __construct($_background, $_width, $_height, $_name, $_value, $_placeholder)
    {
        parent::__construct($_background, $_width, $_height, $_name, $_value);
        $this -> SetPlaceholder($_placeholder);
    }

    function GetPlaceholder()
    {
        return $this -> placeholder;
    }

    function SetPlaceholder($_placeholder)
    {
        $this -> placeholder = $_placeholder;
    }
}
?>