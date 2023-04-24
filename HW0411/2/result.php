<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
    $score = intval($_GET['result3']);
    echo '<h1 style="text-align: center">Congratulations! Your Score ' . $score . '</h1>'
    ?>
    <form style="text-align: center;" method="post" action="1st_level.php">
        <button type="submit">Re-take test</button>
    </form>
</body>
</html>