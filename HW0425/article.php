<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #e6edf3; 
font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji'; 
font-size: var(--body-font-size, 14px);
line-height: 1.5; color: #0d1117">

</body>
</html>
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
        return "<a style='color: " . $color . "; font-size: " . $textSize . "px;' href='article.php?id=" . $this -> id . "'>" . $this -> header . "</a>";
    }

    public function GetShortText($color, $textSize) {
        return "<p style='color: " . $color . "; font-size: " . $textSize . "px;'>" . $this -> shortText . "</p>";
    }

    public function GetFullText($color, $textSize) {
        return "<p style='color: " . $color . "; font-size: " . $textSize . "px;'>" . $this -> fullText . "</p>";
    }
}
?>
