<?php
//1
/*$arr = [3, 14, 55, 6, 0, 11, 1, 2, 5, 10];
echo "Max element: " . max($arr) . "<br/>";
for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] % 2 == 0) {
        echo $arr[$i] . " ";
    }
}
echo "<br/><br/>";
sort($arr);
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . " ";
}*/

//2
/*$arr = array(4, 1, 3, 2, 8, 5, 11, 13, 6, 7);
$arr2 = array(4, 17, 13, 16, 14, 33, 12, 9, 10, 0);
echo "<h3>Input 1 arr: </h3>";
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . " ";
}
echo "<br/>";

echo "<h3>Input 2 arr: </h3>";
for ($i=0; $i < count($arr2); $i++) { 
    echo $arr2[$i] . " ";
}
echo "<br/>";

$arr3 = array_merge($arr, $arr2);

echo "<h3>Output arr: </h3>";
for ($i=0; $i < count($arr3); $i++) { 
    echo $arr3[$i] . " ";
}
echo "<br/>";*/

//3
/*$arr = array(3, 3, 1, 5, 6, 9, 7, 3, 1, 5);
echo "<h3>Input array: </h3>";
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . " ";
}
echo "<br/>";

foreach (array_count_values($arr) as $k => $v) {
    if ($v > 1) {
        echo '<p style="color: green">' . $k . " - " . $v . '</p>';
    }
    else{
        echo '<p style="color: red">' . $k . " - " . $v . '</p>';
    }
}*/
//print_r(array_count_values($arr));

//4
$fruits = ["apple" => ["fruit", 15, 3], "orange" => ["citrus", 20, 2], "banana" => ["fruit", 10, 6], "lemon" => ["citrus", 10, 7], 
"kiwi" => ["fruit", 5, 1]];

print_r($fruits);

echo $fruits["kiwi"];

?>