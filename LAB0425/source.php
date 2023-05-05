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
include_once 'menu.php';
include_once 'menu-item.php';

$menu = new Menu();
$arr = $menu -> GetList();

$home = new MenuItem("Home", "url1.com");
$about = new MenuItem("About", "url2.com");
$photo = new MenuItem("Photo", "url3.com");
$contacts = new MenuItem("Contact Us", "url4.com");
$login = new MenuItem("Login", "url5.com");

$menu -> AddMenuItem2($home);
$menu -> AddMenuItem2($about);
$menu -> AddMenuItem2($photo);
$menu -> AddMenuItem2($contacts);
$menu -> AddMenuItem2($login);

$menu -> PrintMenu(300, 200, "#6648ff", "green");
?>