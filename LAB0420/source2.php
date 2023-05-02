<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        hr{
            border: #7d8590 1px solid;
        }
    </style>
</head>
<body style="background-color: #0d1117; 
font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji'; 
font-size: var(--body-font-size, 14px);
line-height: 1.5; color: #e6edf3">
<?php
include_once 'product2.php';
include_once 'monitor.php';
include_once 'phone.php';

$phone1 = new Phone("Galaxy S22", "ok", "Samsung", "CPU1", 6, 2, 128, "Android");
$phone2 = new Phone("IPhone 7", "k.o.", "Apple", "CPU2", 4, 1, 64, "IOS");
$phone3 = new Phone("IPhone 14 Pro", "OK", "Apple", "CPU3", 6, 2, 256, "IOS");

$monitor1 = new Monitor("Monitor1", "Info1", "Brand1", 27, 60, 3);
$monitor2 = new Monitor("Monitor2", "Info2", "Brand2", 40, 260, 6);

$arr = array($phone1, $phone2, $phone3, $monitor1, $monitor2);

echo "Трошечки темної теми, шоб очі кайфанули <i>(напевно)</i>";

foreach ($arr as $key) {
    echo "<p>" . $key -> GetProduct() . "</p><hr/>";
}
?>
</body>
</html>