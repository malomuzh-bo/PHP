<?php
function FunctionName(&$num)
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
$hello = function($name)
{
    echo "Wassup, my homie, " . $name . "<br/>";
}
?>