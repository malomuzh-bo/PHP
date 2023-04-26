<?php
//1
function Task1($num1, $num2, $action){
    if ($action == '+' || $action == '-' || $action == '*' || $action == '/') {
        switch ($action) {
            case '+':
                echo "{$num1} + {$num2} = " . $num1 + $num2 . "<br/>";
                break;
                case '-':
                    echo "{$num1} - {$num2} = " . $num1 - $num2 . "<br/>";   
                    break;
                    case '*':
                        echo "{$num1} * {$num2} = " . $num1 * $num2 . "<br/>";    
                        break;
                        case '/':
                            if ($num2 != 0) {
                                echo "{$num1} / {$num2} = " . $num1 + $num2 . "<br/>";
                            }
                            else {
                                echo "<h2>Divide by zero, bro...</h2>";
                            }
                            break;
        }
    }
    else {
        echo "<h2>Error!</h2>";
    }
}
/*Task1(17, 5, '+');
Task1(24, 41, '-');
Task1(39, 8, '*');
Task1(17, 5, 'sragf');
Task1(17, 0, '/');
Task1(85, 4, '/');*/
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
    <style>
        .class1{
            color:brown;
            padding: 5px;
            background-color: black;
        }
        .class2{
            color:black;
            padding: 5px;
            background-color: greenyellow; /* шо */
        }
        .class3{
            color:chocolate;
            padding: 5px;
            background-color: yellowgreen; /* шо */
        }
    </style>
</head>
<body>
    <?php Task2("h2", "class2")?>
    <?php Task2("p", "class1")?>
    <?php Task2("span", "class3")?>
</body>
</html> -->
<?php
//2
function Task2($tag, $className){
    echo "<{$tag} class = '{$className}'>{$className}</{$tag}>";
}
?>
<!-- 3 (74 - 118 strings) -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>
    <style>
        .item{
            color: teal;
            padding: 30px;
            background-color: tan;
            float: left;
        }
        .active{
            color: tan;
            background-color: teal;
        }
    </style>
</head>
<body>

</body>
</html> -->

<?php
/*$arr =    [0 => ["title" => "Home", "isActive" => false], 1 => ["title" => "About", "isActive" => true], 
             2 => ["title" => "Contact", "isActive" => false], 3 => ["title" => "Photo", "isActive" => false], 
             4 => ["title" => "Blog", "isActive" => false]];*/

function Task3($arr){
    if (is_array($arr)) {
        echo "<ul style='list-style: none'>";
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i]["isActive"] == true) {
                echo "<li class='item active'>" . $arr[$i]["title"] . "</li>";
            }
            else {
                echo "<li class='item'>" . $arr[$i]["title"] . "</li>";
            }
        }
        echo "</ul>";
    }
}

//Task3($arr);

//4
function GenerateHex(){
    return str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
}

//echo "<div style='background-color: #" . GenerateHex() . "; width: 50px; height: 50px;'></div>";

//5
function Task5($row, $col, $figureName){
    if ($row > 7 || $col > 7) {
        echo "Set correct position!";
    }
    else {
        $arr = [0 => ["color" => "white"], 1 => ["color" => "gray"]];
        $id = 0;
        echo "<table>";
        echo "<tbody>";
        for ($i=0; $i < 8; $i++) { 
            echo "<tr>";
            if ($id == 0) {
                for ($j=0; $j < 8; $j++) {
                    if ($i == $row && $j == $col) {
                        switch ($figureName) {
                            case 'king':
                                echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/king.png'/></td>";
                                break;
                                case 'queen':
                                    echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/queen.png'/></td>";
                                    break;
                                    case 'bishop':
                                        echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/bishop.png'/></td>";
                                        break;
                                        case 'knight':
                                            echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/knight.png'/></td>";
                                            break;
                                            case 'pawn':
                                                echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/pawn.png'/></td>";
                                                break;
                                                case 'rook':
                                                    echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/rook.png'/></td>";
                        break;

                    } 
                }
                else {
                    echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'></td>";
                }
                if ($id == 0) {
                    $id++;
                }
                elseif ($id == 1) {
                    $id--;
                }
            }
            echo "</tr>";
            $id = 1;
        }
        elseif($id == 1){
            for ($j=0; $j < 8; $j++) { 
                if ($i == $row && $j == $col) {
                    switch ($figureName) {
                        case 'king':
                            echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/king.png'/></td>";
                            break;
                            case 'queen':
                                echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/queen.png'/></td>";
                                break;
                                case 'bishop':
                                    echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/bishop.png'/></td>";
                                    break;
                                    case 'knight':
                                        echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/knight.png'/></td>";
                                        break;
                                        case 'pawn':
                                            echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/pawn.png'/></td>";
                                            break;
                                            case 'rook':
                                                echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'><img style='width: 50px' src='figures/rook.png'/></td>";
                                                break;
                                                
                                            } 
                                        }
                                        else {
                                            echo "<td style='width: 50px; height: 50px; background-color: " . $arr[$id]["color"] . "'></td>";
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
                            echo "</tbody>";
                            echo "</table>";
    }
}
Task5(7, 3, "king");
?>