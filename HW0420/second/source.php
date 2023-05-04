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
include_once 'button.php';
include_once 'control.php';
include_once 'input.php';
include_once 'label.php';
include_once 'text.php';
function ConvertToHTML(Control $_control){
    /*if ($_control instanceof Input) {
        echo "<input name='" . $_control -> GetName() . "' value=" . $_control -> GetValue() . " style='background-color: " . $_control -> GetBackground() . "; width: " . $_control -> GetWidth() . "px; height: " . $_control -> GetHeight() . "px' />
        <br/>";
    }*/
    //або я реально в очі довблюся, або тут нема помилки і мені не показує стилі
    if ($_control instanceof Button) {
        if ($_control -> GetSubmitState() == true) {
            echo "<button type='submit' name='" . $_control -> GetName() . "' value=" . $_control -> GetValue() . " style='background-color: " . $_control -> GetBackground() . "; width: " . $_control -> GetWidth() . "px; height: " . $_control -> GetHeight() . "px'>
            " . $_control -> GetValue() . "
            </button><br/>";
        }
        else {
            echo "<button name='" . $_control -> GetName() . "' value=" . $_control -> GetValue() . " style='background-color: " . $_control -> GetBackground() . "; width: " . $_control -> GetWidth() . "px; height: " . $_control -> GetHeight() . "px'>
            " . $_control -> GetValue() . "
            </button><br/>";
        }
    }
    if ($_control instanceof Text) {
        echo "<input type='text' name='" . $_control -> GetName() . "' placeholder=" . $_control -> GetPlaceholder() . " value=" . $_control -> GetValue() . " style='background-color: " . $_control -> GetBackground() . "; width: '" . $_control -> GetWidth() . "px'; height: '" . $_control -> GetHeight() . "px' />
        <br/>";
    }
    if ($_control instanceof Label) {
        echo "<label for='" . $_control -> GetParentName() . "' style='background-color: " . $_control -> GetBackground() . "; width: '" . $_control -> GetWidth() . "px'; height: '" . $_control -> GetHeight() . "px'>
        " . $_control -> GetValue() . "
        </label><br/>";
    }

}
$button = new Button('purple', 200, 50, 'button1', 'Value1', false);
$text = new Text('purple', 150, 100, 'NameText', 'Value2', 'Enter text...');
$label = new Label('green', 100, 40, 'label1', 'label', 'for me');

//або я реально в очі довблюся, або тут нема помилки і мені не показує стилі
ConvertToHTML($button);
echo "<hr/>";
ConvertToHTML($text);
echo "<hr/>";
ConvertToHTML($label);
?>