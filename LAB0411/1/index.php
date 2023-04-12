<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
</head>
<body>
    <form method="post">
        <input type="text" name="text" placeholder="Enter text..." />
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
$text = "sth";
if (isset($_POST["text"])) {
    $text = $_POST["text"];
}
echo $text;

?>