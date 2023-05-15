<?php
class Article {
    public $id;
    public $header;
    public $shortText;
    public $fullText;

    public function __construct($_id, $_header, $_shortText, $_fullText) {
        $this -> id = $_id;
        $this -> header = $_header;
        $this -> shortText = $_shortText;
        $this -> fullText = $_fullText;
    }

    public function GetId() {
        return $this -> id;
    }

    public function GetHeader($color, $textSize) {
        return "<a style='color: " . $color . "; font-size: " . $textSize . "px;' href='articleById.php?id=" . $this -> id . "'>" . $this -> header . "</a>";
    }

    public function GetShortText($color, $textSize) {
        return "<p style='color: " . $color . "; font-size: " . $textSize . "px;'>" . $this -> shortText . "</p>";
    }

    public function GetFullText($color, $textSize) {
        return "<p style='color: " . $color . "; font-size: " . $textSize . "px;'>" . $this -> fullText . "</p>";
    }
}
?>
