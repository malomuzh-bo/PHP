<?php
//1
/*$num1 = 3;
if ($num1 % 2 == 0) {
    echo "Number is paired";
}
else{
    echo "Number is not paired";
}*/

//2
/*$num1 = 34;
$num2 = 33;
if ($num1 > $num2) {
    echo $num1 . " larger than " . $num2;
}
else{
    echo $num2 . " larger than " . $num1;
}*/

//3
/*$num1 = -77;
if ($num1 < 0) {
    $num1 = abs($num1);
    echo "Number was changed<br/>" . $num1;
}
else{
    echo "Number was not changed<br/>" . $num1;
}*/

//4
/*$numA = 3;
$numB = 100;
$num = 44;
if ($num > $numA && $num < $numB) {
    echo "Number was changed<br/>" . $num * $num;
}
else{
    echo "Number wasn't changed<br/>" . $num;
}*/

//5
/*$tagNum = 2;
if ($tagNum >= 1 && $tagNum <= 6) {
    echo "<h" . $tagNum . ">Number = " . $tagNum . " and we can make h" . $tagNum . " header.</h" . $tagNum . ">";
}
else{
    echo "Number = " . $tagNum . " and HTML doesn't support h" . $tagNum . " header.";
}*/

//6
/*$d = 22;
$m = 10;
$fullData = [0 => [31, "Jan", "winter"], 1 => [28, "Feb", "winter"], 2 => [31, "Mar", "spring"], 3 => [30, "Apr", "spring"], 4 => [31, "May", "spring"], 
5 => [30, "Jun", "summer"], 6 => [31, "Jul", "summer"], 7 => [31, "Aug", "summer"], 8 => [30, "Sep", "fall"], 9 => [31, "Oct", "fall"], 
10 => [30, "Nov", "fall"], 11 => [31, "Dec", "winter"]];

if ($d <= $fullData[$m - 1][0] / 2) {
    echo "It's " . $fullData[$m - 1][1] . ", " . $fullData[$m - 1][2] . ", first half of month.";
}
else{
    echo "It's " . $fullData[$m - 1][1] . ", " . $fullData[$m - 1][2] . ", second half of month.";
}
*/

//7
$input_num = 120;
$from = "MB";
$to = "KB";

echo $input_num . $from . " = " . $input_num * 1024 . $to . ".";
?>