<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <input placeholder="Login" name="tLogin" required>
        <input placeholder="Password" type="password" name="tPass" required>
        <input placeholder="Confirm password" type="password" name="tPass2" required>
        <input placeholder="Email" type="email" name="tEmail">
        <input placeholder="Phone number" name="tNum">
        <button type="submit">Register</button>
    </form>

</body>
</html>

<?php
if (isset($_POST['tLogin']) && isset($_POST['tPass'])) {
    if ($_POST['tLogin'] == $_POST['tPass']) {
        header('Location: source.php');
    }
    else{
        echo "Some errors. Please try again.";
        exit;
    }
}
?>