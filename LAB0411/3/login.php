<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input placeholder="Login..." name="tLogin" />
        <input placeholder="Password..." name="tPass" type="password" />
        <button type="submit" name="nLogin" value="vLogin">Login</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['tLogin']) && isset($_POST['tPass'])) {
    if ($_POST['tLogin'] == $_POST['tPass']) {
        header('Location: source.php');
    }
    else{
        echo "Some errors. Please try again or <a href='register.php'>register</a>";
        exit;
    }
}
?>