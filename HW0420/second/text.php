<?php
include_once 'input.php';
class Text extends Input{
    private $placeholder;

    public function __construct($_background, $_width, $_height, $_name, $_value, $_placeholder)
    {
        //нє, навіть це не допомагає. Ну його...
        $this -> SetBackground($_background);
        $this -> SetWidth($_width);
        $this -> SetHeight($_height);
        $this -> SetName($_name);
        $this -> SetValue($_value);
        //parent::__construct($_background, $_width, $_height, $_name, $_value);
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