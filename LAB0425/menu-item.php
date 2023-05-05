<?php
class MenuItem{
    public $name, $url;

    public function __construct($_name, $_url)
    {
        $this -> name = $_name;
        $this -> url = $_url;
    }

    public function GetName()
    {
        return $this -> name;
    }
    public function GetUrl()
    {
        return $this -> url;
    }
}
?>