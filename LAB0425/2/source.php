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
    <form method="post">
        <input placeholder="Name..." name="name"><br>
        <input placeholder="Login..." name="login"><br>
        <input placeholder="Password..." name="pass" type="password"><br>
        <input type="submit" name="doc" value="Save doc">
        <input type="submit" name="txt" value="Save to txt">
        <input type="submit" name="show" value="Show result">
    </form>
</body>
</html>
<?php
if (!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['pass'])) {
    if (isset($_POST['doc'])) {
        $arr = ['name' => $_POST['name'], 'login' => $_POST['login'], 'password' => $_POST['pass']];
        $filename = 'document.json';
        $extra = json_decode(file_get_contents($filename), true);
        // print_r($extra);
        $extra[] = $arr;
        // print_r($extra);
        $data = json_encode($extra, JSON_PRETTY_PRINT);
        file_put_contents($filename, $data);
    }
    if (isset($_POST['txt'])) {
        $arr = array($_POST['name'], $_POST['login'], $_POST['pass']);
        $filename = 'document.txt';
        $fd = fopen($filename, 'a') or die("Error__");
        fputs($fd, "Username: " . $arr[0] . "\n" . "Login: " . $arr[1] . "\nPass: " . $arr[2] . "\n\n");
        fclose($fd);
    }
}
if (isset($_POST['show'])) {
    $filename = 'document.txt';
    $fd = fopen($filename, 'r') or die("Error__");
    echo "<hr/>";
    while (!feof($fd)) {
        $str = htmlentities(fgets($fd));
        echo $str . "<br/>";
    }
    fclose($fd);
}
?>