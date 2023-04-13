<?php
function GetArray($array){
    for ($i=0; $i < count($array); $i++) {
        echo $array[$i] . " ";
    }
    echo "<br/><br/>";
}
function FillRandomNumbersArr(&$array){
    for ($i=0; $i < 10; $i++) { 
        array_push($array, rand(10, 100));
    }
}
//1
/*$arr = array();
for ($i=0; $i < 10; $i++) { 
    array_push($arr, rand(10, 100));
}
echo "<h2>Input arr: </h2>";
GetArray($arr);
echo "<hr/>";
echo "<h2>Output arr: </h2>";
$revArr = array_reverse($arr);
GetArray($revArr);*/

//2
/*$arr = array();
$searchNum = 77;
$flag = false;
for ($i=0; $i < 10; $i++) { 
    array_push($arr, rand(10, 100));
}
echo "<h2>Input arr: </h2>";
GetArray($arr);

for ($i=0; $i < count($arr); $i++) { 
    if ($searchNum == $arr[$i]) {
        echo "Number " . $searchNum . " was founded. Index " . $i;
        $flag = true;
        return;
    }
}
if (!$flag) {
    echo "Number " . $searchNum . " wasn't founded.";
}*/

//3
/*$banners = [    0 => ["title" => "banner1", "src" => "images(arrays_2)/Fashion sale banner or square flyer for social media post template.png"], 
                1 => ["title" => "banner2", "src" => "images(arrays_2)/Free Vector _ World oceans day banners.png"], 
                2 => ["title" => "banner3", "src" => "images(arrays_2)/Never give up sport banner.png"], 
                3 => ["title" => "banner4", "src" => "images(arrays_2)/Premium classic watch promotion social media instagram story banner template.png"], 
                4 => ["title" => "banner5", "src" => "images(arrays_2)/Premium Vector _ Rent car for social media post banner template luxury.png"],
                5 => ["title" => "banner6", "src" => "images(arrays_2)/Luxury furniture sale social media banner template.png"], 
                6 => ["title" => "banner7", "src" => "images(arrays_2)/Mustang History.png"]
];
$randNum = rand(0, count($banners) - 1);
echo '<div><img width=30%, title="' . $banners[$randNum]["title"] . '", src="' . $banners[$randNum]["src"] . '" /></div>';*/

//4
/*$arr = array();
for ($i=0; $i < 5; $i++) {
    for ($j=0; $j < 5; $j++) { 
        $arr[$i][$j] = rand(10, 100);
    }
}

//get arrays
echo "<h3>Original: </h3><br/>";
for ($i=0; $i < count($arr); $i++) { 
    for ($j=0; $j < count($arr); $j++) { 
        echo $arr[$i][$j] . " ";
    }
    echo "<br/>";
}

echo "<h3>Sorted: </h3><br/>";
for ($i=0; $i < count($arr); $i++) { 
    for ($j=0; $j < count($arr); $j++) { 
        sort($arr[$i]);
        echo $arr[$i][$j] . " ";
    }
    echo "<br/>";
}*/

//5
/*$arr1 = array();
$arr2 = array();

for ($i=0; $i < 10; $i++) { 
    array_push($arr1, rand(10, 100));
}
FillRandomNumbersArr($arr2);

echo "<h3>Input:</h3>";
GetArray($arr1);
GetArray($arr2);

$uniqueArr = array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1));

echo "<h3>Output:</h3>";
GetArray($uniqueArr);*/

//6
$arr = array();
$colors = [0 => "red", 1 => "orange", 2 => "yellow", 3 => "green", 4 => "blue", 5 => "purple", 6 => "cyan", 7 => "pink"];

for ($i=0; $i < 10; $i++) { 
    $arr[$i]["x"] = rand(0, 500);
    $arr[$i]["y"] = rand(30, 500);
}

for ($i=0; $i < count($arr); $i++) { 
    echo "(" . $arr[$i]["x"] . "; " . $arr[$i]["y"] . ") ";
}

for ($i=0; $i < count($arr); $i++) { 
    echo '<div style="background-color: ' . $colors[rand(0, 7)] . '; position:absolute; width: 20px; height: 20px; left: ' . $arr[$i]["x"] . 'px; top: ' . $arr[$i]["y"] . '"></div>';
}

?>