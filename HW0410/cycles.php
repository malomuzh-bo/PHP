<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .circle{
            position: absolute;
            top: 200px;
            left: 200px;

            border: 1px solid blue;
            border-radius: 50%;
        }
        td{
            width: 50px;
            height: 50px;
        }
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
//1
/*$counter = 0;
$num = 0;
$arr = array();
$avg = 0;

do {
    $num++;
    if ($num % 2 == 0) {
        echo '<span style="font-size: ' . $num * 5 . 'px; color: purple;">' . $num . '</span>';
        $counter++;
        array_push($arr, $num);
    }
} while($counter != 10);

echo "<h3>Sum: " . array_sum($arr) . "</h3>";
echo "<h3>Average: " . array_sum($arr) / count($arr) . "</h3>";*/

//2
/*$num = 137;
$counter = 0;

for ($i=1; $i < $num; $i++) { 
    if ($num % $i == 0) {
        $counter++;
    }
}
if ($counter == 1) {
    echo "Number " . $num . " is simple.";
}
else{
    echo "Number " . $num . " isn't simple.";
}*/

//3
/*$size = 20;

for ($i=0; $i < 10; $i++) { 
    echo '<div class="circle" style="width: ' . $size . 'px; height: ' . $size . 'px"></div>';
    $size+=15;
}*/

//4
/*$different = 0;
$same = 0;

for ($i=1000; $i < 10000 ; $i++) { 
    $arr = str_split($i);

    if($arr[0] == $arr[1] && $arr[0] == $arr[2] && $arr[0] == $arr[3]){
        $same++;
    }
    if($arr[0] != $arr[1] && $arr[0] != $arr[2] && $arr[0] != $arr[3] && $arr[1] != $arr[2] && $arr[1] != $arr[3] && $arr[2] != $arr[3]){
       $different++;
    }
}
echo "Different numbers: $different<br/>";
echo "Same numbers: $same";*/

//5
/*$num = 77;
echo "Input number: " . $num . "<br/>";
echo "Converted to binary: " . decbin($num);*/

//6+7
$arr = [0 => ["color" => "white"], 1 => ["color" => "gray"]];
$id = 0;

echo "<table>";
echo "<tbody>";
//black
for ($i=0; $i < 8; $i++) { 
    echo "<tr>";
    if ($i == 0) {
        if($id == 0){
            for ($j=0; $j < 8; $j++) { 
                if ($j == 0 || $j == 7) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-rook.png"/></td>';
                }
                
                if ($j == 1 || $j == 6) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-knight.png"/></td>';
                }
                if ($j == 2 || $j == 5) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-bishop.png"/></td>';
                }
                if ($j == 3) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-queen.png"/></td>';
                }
                
                if ($j == 4) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-king.png"/></td>';
                }
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 1;
        }
        elseif($id == 1){
            
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . '"></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 0;
        }
    }
    if ($i == 1) {
        if($id == 0){
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-pawn.png"/></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 1;
        }
        elseif($id == 1){
            
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/black-pawn.png"/></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 0;
        }
    }
    if ($i > 1 && $i < 6) {
        if($id == 0){
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . ';"></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 1;
        }
        elseif($id == 1){
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . '"></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 0;
        }
    }
    if ($i == 6) {
        if($id == 0){
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-pawn.png"/></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 1;
        }
        elseif($id == 1){
            
            for ($j=0; $j < 8; $j++) { 
                echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-pawn.png"/></td>';
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 0;
        }
    }
    if ($i == 7) {
        if($id == 0){
            for ($j=0; $j < 8; $j++) { 
                if ($j == 0 || $j == 7) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-rook.png"/></td>';
                }
                
                if ($j == 1 || $j == 6) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-knight.png"/></td>';
                }
                if ($j == 2 || $j == 5) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-bishop.png"/></td>';
                }
                if ($j == 3) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-queen.png"/></td>';
                }
                
                if ($j == 4) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-king.png"/></td>';
                }
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 1;
        }
        elseif($id == 1){
            
            for ($j=0; $j < 8; $j++) { 
                if ($j == 0 || $j == 7) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-rook.png"/></td>';
                }
                
                if ($j == 1 || $j == 6) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-knight.png"/></td>';
                }
                if ($j == 2 || $j == 5) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-bishop.png"/></td>';
                }
                if ($j == 3) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-queen.png"/></td>';
                }
                
                if ($j == 4) {
                    echo '<td style="background-color: ' . $arr[$id]["color"] . ';"><img src="figures(cycles)/white-king.png"/></td>';
                }
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            $id = 0;
        }
    }
    echo "</tr>";
}
//white
echo "</tbody>";
echo "</table>";





?>