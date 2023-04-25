<!--1-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <textarea rows="5" columns="10" style="height: 100px; width: 354px;" name="string"></textarea>
        <br/>
        <input placeholder="Enter char" name="char" />
        <button name="getCount" type="submit">Get count</button>
    </form>
</body>
</html> -->
<!--це шоб Ви текст не шукали: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus mauris fermentum dolor imperdiet fringilla. Maecenas convallis ut libero sed pulvinar. Fusce aliquet tellus quis orci fermentum, ac feugiat ipsum hendrerit. Vestibulum quis ipsum porttitor lacus elementum laoreet. Proin at nunc urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla auctor leo id magna eleifend, eu ornare ante placerat.-->

<?php
function Task1($str, $letter = 'a'){
    echo "<p>Count symbol '" . strtoupper($letter) . "': " . substr_count(strtoupper($str), strtoupper($letter)) . "</p>";
}
if(isset($_POST['getCount'])){
    if (!empty($_POST['string']) && !empty($_POST['char'])) {
        Task1($_POST['string'], $_POST['char']);
    }
}

//2
function Task2(&$arr){
    if (is_array($arr)) {
        for ($i=0; $i < count($arr); $i++) { 
            $arr[$i] = rand(10, 100);
        }
        echo "<div style='float: left; padding: 10px'>";
        for ($i=0; $i < count($arr); $i++) { 
            echo "<h5>" . $arr[$i] . "</h5>";
        }
        echo "</div>";
    }
    else {
        echo "<h2>Error!</h2>";
    }
}
$arr = array(66, 24, 16, 68, 56, 11, 18, 82, 14);
$test = 3;
//Task2($arr);
//Task2($test);

//3
function MySort($arr, $is_asc){
    if (is_array($arr) && is_bool($is_asc)) {
        if ($is_asc) {
            echo "Sort asc";
            sort($arr);
        }
        else {
            echo "Sort desc";
            rsort($arr);
        }
        echo "<div style='padding: 10px'>";
        for ($i=0; $i < count($arr); $i++) { 
            echo "<h5>" . $arr[$i] . "</h5>";
        }
        echo "</div>";
    }
    else {
        echo "<h2>Error!</h2>";
    }
}
//MySort($arr, true);
//MySort($arr, false);
?>
<!-- 4 -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
    <style>
        td>input{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    //$arr = [0 => [10, 23, 1, 55, 3, 11, 34], 1 => [15, 43, 20, 18, 12, 3, 99], 2 => [5, 8, 12, 35, 41, 8, 77], 3 => [1, 2, 3, 4, 5, 6, 7], 4 => [50, 34, 17, 90, 34, 22, 10]];
    //CreateTable($arr);
    ?>
</body>
</html> -->

<?php
//Also 4
function CreateTable($arr){
    if (is_array($arr)) {
        echo "<table><tbody>";
        foreach ($arr as $key => $value) {
            echo "<tr>";
            foreach ($value as $item) {
                echo "<td><input value = " . $item . " /></td";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
    else{
        echo "<h2>Error!</h2>";
    }
}
// $arr = [0 => [10, 23, 1, 55, 3, 11, 34], 1 => [15, 43, 20, 18, 12, 3, 99], 2 => [5, 8, 12, 35, 41, 8, 77], 3 => [1, 2, 3, 4, 5, 6, 7], 4 => [50, 34, 17, 90, 34, 22, 10]];
// CreateTable($arr);

//5
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices</title>
</head>
<body>
    <form method="post">    
        <button name="dice" type="submit">Dice!</button>
    </form>
</body>
</html>
<?php
function Dices(){
    if(isset($_POST['dice'])){
        echo "<img src='img/" . rand(1, 6) . ".png' style='width: 100px; height: 100px;' />";
        echo "<img src='img/" . rand(1, 6) . ".png' style='width: 100px; height: 100px;' /><br/>";
    }
}
Dices();
?>