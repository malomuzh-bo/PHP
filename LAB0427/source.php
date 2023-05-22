<?php
if(!isset($_COOKIE['login'])){
    if(isset($_POST['enter'])){
        setcookie('login', $_POST['name'], 3600, '/');
    }
 }
?>
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
        <input placeholder="Login..." name="enter" id="enter" onkeyup="check()">
        <input placeholder="Password..." name="pass" id="pass" type="password" onkeyup="check()">
        <input type="submit" name="register" value="Register">
        <input type="submit" name="login" value="Login">
    </form>
    <hr>
    <form method="post">
        <input placeholder="Enter message..." name="message">
        <input type="submit" name="send" id="send" value="Send" <?php (isset($_COOKIE['enter'])) ? "" : "disabled"?>>
        <input type="submit" name="refresh" value="Refresh">
    </form>
</body>
</html>
<?php
session_start();
if (isset($_POST['enter']) && isset($_POST['pass'])) {
    if (isset($_POST['register'])) {
        $arr = ['login' => $_POST['enter'], 'password' => $_POST['pass']];
        $filename = 'document.json';
        $extra = json_decode(file_get_contents($filename), true);          //first time comment this, next - delete 2 '/'
        // print_r($extra);
        $extra[] = $arr;
        // print_r($extra);
        $data = json_encode($extra, JSON_PRETTY_PRINT);
        file_put_contents($filename, $data);

        $_SESSION['sender'] = $_POST['enter'];
        echo "<h2>" . $_SESSION['sender'] . "</h2>";
        //echo "<script>alert('Now you are registered!')</script>";
    }
    if (isset($_POST['login'])) {
        $filename = 'document.json';
        $arr = array();
        if (file_exists($filename)) {
            $data = file_get_contents($filename);
            $arr = json_decode($data, true);
            foreach ($arr as $key) {
                if ($key['login'] == $_POST['enter'] && $key['password'] == $_POST['pass']) {
                    $_SESSION['sender'] = $_POST['enter'];
                    echo "<h2>" . $_SESSION['sender'] . "</h2>";
                    echo "<script>alert('Now you are logged!')</script>";
                    return;
                }
                else {
                    echo "<script>alert('Error! Try again.')</script>";
                    return;
                }
            }
        } else {
            echo "<script>alert('Error! Check the document file.')</script>";
        }
    }
}
if (isset($_POST['send'])) {
    if ($_POST['message'] != "") {
        $arr = ['date' => getdate()['weekday'] . " " . getdate()['mday'] . " " . getdate()['year'], 'from' => $_SESSION['sender'], 'content' => $_POST['message']];
        $filename = 'messages.json';
        if (!file_exists($filename)) {
            // print_r($extra);
            $extra[] = $arr;
            // print_r($extra);
            $data = json_encode($extra, JSON_PRETTY_PRINT);
            file_put_contents($filename, $data);
        }
        else {
            $extra = json_decode(file_get_contents($filename), true);          //first time comment this, next - delete 2 '/'
            // print_r($extra);
            $extra[] = $arr;
            // print_r($extra);
            $data = json_encode($extra, JSON_PRETTY_PRINT);
            file_put_contents($filename, $data);
        }
    }
}
?>
<script>
    function check(){
        var btn = document.getElementById('send');
        var login = document.getElementById('enter').value;
        var pass = document.getElementById('pass').value;
        // console.log(login);
        // console.log(pass);
        if (login != "" && pass != "") {
            btn.removeAttribute('disabled');
        }
        else{
            btn.setAttribute('disabled', true);
        }
    }
</script>