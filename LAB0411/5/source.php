<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <form method="post">
        <input placeholder="Name" name="name"><br>
        <input placeholder="Number" type="number" name="num"><br>
        <textarea placeholder="Message" name="message"></textarea><br>
        <button type="submit" name="nReg">Send</button>
    </form>
    <?php
    if (isset($_POST['name']) && isset($_POST['num']) && isset($_POST['message'])) {
        echo "<div><br/><h3>From: " . $_POST['name'] . "</h3><br/><h3>Phone: " . $_POST['num'] . "</h3><br/><h3>Message: " . $_POST['message'] . "</h3></div>";
    }
    ?>
</body>
</html>
<?php







?>