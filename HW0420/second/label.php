<?php
include_once 'control.php';
// Спеціально прописав extends Input, тому що name і value в класі Control немає
class Label extends Input{
    private $for;

    public function __construct($_background, $_width, $_height, $_name, $_value, $_forObject)
    {
        parent::__construct($_background, $_width, $_height, $_name, $_value);
        $this -> for = $_forObject;
    }

    function GetParentName()
    {
        return $this -> for;
    }

    function SetParentName(Input $_input)
    {
        $this -> for = $_input -> GetName(); 
    }
}
?>