<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #e6edf3; 
font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji'; 
font-size: var(--body-font-size, 14px);
line-height: 1.5; color: #0d1117">
    
</body>
</html>
<?php
$files = file_get_contents("images.json");
$images = json_decode($files, true);

$amount = isset($_GET['amount']) ? $_GET['amount'] : 4;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$amoPages = ceil(count($images) / $amount);
?>