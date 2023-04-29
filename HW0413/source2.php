<?php
//1
function Task1($arr){
  if (is_array($arr)) {
    for ($i=0; $i < count($arr); $i++) {
      if ($arr[$i] < 0) {
        echo "<span style='color: red'>" . $arr[$i] . "</span><br/>";
      }
      else {
        echo "<span>" . $arr[$i] . "</span><br/>";
      }
    }
  }
  else {
    echo "<h2>Error!</h2>";
  }
}
/*$arr = [5, 10, -6, 9, -3, 0, 11, 25];
Task1($arr);*/

//2
function Task2($number) {
	static $dictionary = array(
    array(
      -2 => 'two', -1 => 'one', 1	=> 'one', 2	=> 'two', 3	=> 'three', 4	=> 'four', 5	=> 'five', 6	=> 'six', 7	=> 'seven', 8	=> 'eight', 9	=> 'nine',
      10	=> 'ten', 11	=> 'eleven', 12	=> 'twelve', 13	=> 'thirteen', 14	=> 'fourteen', 15	=> 'fifteen', 16	=> 'sixteen', 17	=> 'seventeen',
		18	=> 'eighteen', 19	=> 'nineteen', 20	=> 'twelve', 30	=> 'thirty', 40	=> 'forty', 50	=> 'fifty', 60	=> 'sixty', 70	=> 'seventy', 80	=> 'eighty',
		90	=> 'ninety', 100	=> 'one hundred', 200	=> 'two hundred', 300	=> 'three hundred', 400	=> 'four hundred', 500	=> 'five hundred', 600	=> 'six hundred',
    700	=> 'seven hundred', 800	=> 'eight hundred', 900	=> 'nine hundred'),
    array('dollars', 'thousand', 'million', 'billion', 'trillion', 'quadrillion')
	);
	
	$string = array();

	$number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);

	$parts = array_reverse(str_split($number,3));
	
	foreach($parts as $i=>$part) {

		if($part>0) {

			$digits = array();

			if($part > 99) {
				$digits[] = floor($part / 100) * 100;
			}

			if($mod1 = $part % 100) {
				$mod2 = $part % 10;
				$flag = $i == 1 && $mod1 != 11 && $mod1 != 12 && $mod2 < 3 ? -1 : 1;
				if ($mod1 < 20 || !$mod2) {
					$digits[] = $flag * $mod1;
				}
        else {
					$digits[] = floor($mod1 / 10) * 10;
					$digits[] = $flag * $mod2;
				}
			}

			$last = abs(end($digits));

			foreach($digits as $j => $digit) {
				$digits[$j] = $dictionary[0][$digit];
			}
      
			$digits[] = $dictionary[1][$i];
			
			array_unshift($string, join(' ', $digits));
		}
	}

	return join(' ', $string);
}
//echo Task2(465874320);

//3
function Task3(){
  global $counter;
  echo "<div style='position: absolute; width: 20px; height: 20px; top:" . rand(0, 600) . "px; left: " . rand(0, 600) . "px; background-color: blue'></div>";
  while ($counter < 9) {
    $counter++;
    Task3();
    echo $counter . " ";
  }
}
/*$counter = 0;
Task3($counter);*/

//4
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task4</title>
  <style>
    .product{
      float: left;
      border: 1px solid green;
    }
    .product > img{
      height: 250px;
    }
    .product > button{
      background-color: blue;
      color: white;
      width: 160px;
      height: 30px;
      margin: 20px;
      transition: .2s;
    }
    .product > button:hover{
      background-color: cornflowerblue;
      transition: .2s;
    }
  </style>
</head>
<body>
  
</body>
</html>
<?php
function Task4($arr){
  if (is_array($arr)) {
      foreach ($arr as $key => $value) {
        echo "<form action='cart.php'>
        <div class='product'>
        <img src='" . $arr[$key]['imgPath'] . "' />
        <h3>" . $arr[$key]['title'] . "</h3>
        <p>" . $arr[$key]['price'] . "</p>
        <input name='id' value='" . $key . "' hidden/>
        <input name='title' value='" . $arr[$key]['title'] . "' hidden/>
        <input name='price' value='" . $arr[$key]['price'] . "' hidden/>
        <button type='submit' name='AddCart' value='AddCart'>Add to Cart</button>
        </div>
        </form>";
      }
  }
  else {
    echo "<h2>Error!</h2>";
  }
}
$arr = [0 => ['title' => 'Iphone 14 Pro', 'imgPath' => 'img/iphone.jpg', 'price' => 1800], 
        1 => ['title' => 'Samsung S22 Ultra', 'imgPath' => 'img/samsung.jpg', 'price' => 2000], 
        2 => ['title' => 'OnePlus 10 Pro', 'imgPath' => 'img/oneplus.jpg', 'price' => 1400]
];
Task4($arr);
?>