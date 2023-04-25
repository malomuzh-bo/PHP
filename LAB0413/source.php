<?php
/*function FunctionName(&$num)
{
    $num += 15;
    echo "Number into func: " . $num . "<br/>";
}
$test = 4;
echo "Number out of func: " . $test . "<br/>";
FunctionName($test);
echo "Number out of func: " . $test . "<br/>";
/*include не поверне проблему
require повертає. Використається на розробці, в кінці замінюють на include.
include_once і require_once: include і require відповідно на максималках.
*/
/*$hello = function($name)
{
    echo "Wassup, my homie, " . $name . "<br/>";
};*/


//1
function Task1($num1, $num2){
    echo "Number 1: " . $num1 . ", number 2: " . $num2 . "<br/>";
    if ($num1 > $num2) {
        echo "Max: " . $num1 . "<br/>";
    }
    else {
        echo "Max: " . $num2 . "<br/>";
    }
    echo "Pow: " . pow($num1, $num2) . "<br/>";
    echo "Avg: " . ($num1 + $num2) / 2 . "<br/>";
}
//Task1(7, 2);

//2
function Task2($num, $dig)
{
    echo "<h2>" . $num . " without '". $dig . "' is " . str_replace(strval($dig), '', strval($num)) . "</h2>";
}
//Task2(37435182334, 3);

//3
function Task3(){
    $time = date('G');
    if ($time >= 5 && $time < 12) {
        echo "<style>body {background-color: blue} p {color: white}</style>";
    }
    if ($time >= 12 && $time < 18) {
        echo "<style>body {background-color: orange}</style>";
    }
    if ($time >= 18 && $time < 20) {
        echo "<style>body {background-color: red}</style>";
    }
    if ($time >= 20 && $time < 24) {
        echo "<style>body {background-color: black} p {color: white}</style>";
    }
    if ($time >= 0 && $time < 5) {
        echo "<style>body {background-color: black} p {color: white}</style>";
    }
}
/*?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>
    <?php Task3()?>

</head>
<body>
    <?php
        echo "<p>Hours now: " . date('G') . "</p>";
    ?>
</body>
</html>*/

//4
function Task4($num, $div = 2){
    if ($num % $div == 0) {
        echo "<h3>" . $div . " is multiple for " . $num . "</h3><br/>";
    }
    else{
        echo "<h3>" . $div . " is not multiple for " . $num . "</h3><br/>";
    }
}
/*Task4(42);
Task4(17, 3);*/

//5
function CreateTable($rows, $cols, $width, $height){
    echo "<table border = 1><tbody>";
    for ($i=0; $i < $rows; $i++) { 
        echo "<tr>";
        for ($j=0; $j < $cols; $j++) { 
            echo "<td style='width: " . $width . "px; height: " . $height . "px'></td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
}
//CreateTable(6, 5, 50, 50);

//6
function Task6($dig){
    if ($dig <= 0) {
        echo "Digital is less than 0 or equal 0";
    }
    else {
        while ($dig > 0) {
            echo "<span style='padding: 20px'>" . $dig . "</span>";
            $dig--;
        }
    }
}
//Task6(12);