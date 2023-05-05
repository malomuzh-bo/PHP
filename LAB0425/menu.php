<?php
include_once 'menu-item.php';
class Menu{
    public $listItems = array();

    public function GetList()
    {
        return $this -> listItems;
    }
    
    public function PrintMenu($_width, $_height, $_bgColor, $_color){
        echo "<h2>Menu:</h2>";
        echo "<ul style='width:" . $_width . "px; height: " . $_height . "px; background-color: " . $_bgColor . "; color: " . $_color . "'>";
            foreach ($this -> listItems as $key) {
                echo "<li><a href='" . $key -> GetUrl() . "'>" . $key -> GetName() . "</a></li>";
            }
        echo "</ul>";        
    }
    public function AddMenuItem($_name, $_url)
    {
        array_push($this -> listItems, new MenuItem($_name, $_url));
    }
    public function AddMenuItem2(MenuItem $_item)
    {
        array_push($this -> listItems, $_item);
    }
}
?>