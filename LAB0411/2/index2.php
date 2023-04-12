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
        <input type="text" name="inpText" placeholder="Search..."/>
        <button type="submit">Search</button>
    </form>
    <ul>
        <li>Poland</li>
        <li>Portugal</li>
        <li>Singapore</li>
        <li>French Polynesia</li>
    </ul>
</body>
</html>
<?php
$text = "not changed";
if (isset($_POST["inpText"])) {
    $text = $_POST["inpText"];
}

?>