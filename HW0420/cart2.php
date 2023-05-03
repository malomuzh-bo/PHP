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
    
</body>
</html>
<?php
    include_once 'cart.php';
    include_once 'monitor.php';
    include_once 'phone.php';
    include_once 'session.php';
    session_start();
    echo "<h2>Cart</h2>";
    $cart = unserialize($_SESSION['cart_arr']);
    echo "<hr>";
    foreach ($cart as $item) {
        echo $item -> GetProduct();
    }
?>