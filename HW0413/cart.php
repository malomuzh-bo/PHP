<?php
echo "<h2>Cart</h2>";
if (isset($_GET['title']) && isset($_GET['price']) && isset($_GET['id'])) {
    setcookie("Id" . $_GET['id'], $_GET['id'], time() + 60 * 60 * 24, "/", "", 0);
    setcookie("Title" . $_GET['id'], $_GET['title'], time() + 60 * 60 * 24, "/", "", 0);   
    setcookie("Price" . $_GET['id'], $_GET['price'], time() + 60 * 60 * 24, "/", "", 0);
    if (isset($_COOKIE["Amount" . $_GET['id']])) {
        $_COOKIE["Amount" . $_GET['id']]++;
        setcookie("Amount" . $_GET['id'], $_COOKIE["Amount" . $_GET['id']]);
    }
    else{
        setcookie("Amount" . $_GET['id'], 0);
    }
    /*if (isset($_COOKIE['Title' . $_GET['id']])) {
        $_COOKIE['Amount' . $_GET['id']]++;
        setcookie('Amount' . $_GET['id'], $_COOKIE['Amount' . $_GET['id']]);
    }
    else{
    }*/
    for ($i=0; $i < count($_COOKIE); $i++) { 
        if (isset($_COOKIE["Id" . $i])) {
            echo "Id: " . $_COOKIE["Id" . $i] . "<br/>";
            echo "Title: " . $_COOKIE["Title" . $i] . "<br/>";
            echo "Price: " . $_COOKIE["Price" . $i] . "<br/>";
            echo "Amount: " . $_COOKIE["Amount" . $i] . "<br/>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
</body>
</html>