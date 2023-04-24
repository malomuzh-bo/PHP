<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <form method="post">
        <h4>Question example 1?</h4>
        <input name="rQuest1" value="">
        <label for="check">Your Answer</label>
        <br>

        <h4>Question example 2?</h4>
        <input name="rQuest2" value="">
        <label for="check">Your Answer</label>
        <br>

        <h4>Question example 3?</h4>
        <input name="rQuest3" value="">
        <label for="check">Your Answer</label>
        <br>

        <h4>Question example 4?</h4>
        <input name="rQuest4" value="">
        <label for="check">Your Answer</label>
        <br>

        <button type="submit" name="nextBtn">Next</button>
    </form>
</body>
</html>
<?php
$result3 = intval($_GET['result2']);
echo "RESULT: " . $result3;
if (isset($_POST['nextBtn'])) {
    if (empty($_POST['rQuest1']) || empty($_POST['rQuest2']) || empty($_POST['rQuest3']) || empty($_POST['rQuest4'])) {
        echo "<h2>Please, make all questions answered!</h2>";
    }
    else{
        if ($_POST['rQuest1'] == 'Answer1') {
            $result3 += 5;
        }
        if ($_POST['rQuest2'] == 'Answer2') {
            $result3 += 5;
        }
        if ($_POST['rQuest3'] == 'Answer2') {
            $result3 += 5;
        }
        if ($_POST['rQuest4'] == 'Answer1') {
            $result3 += 5;
        }
        header('Location: result.php?result3=' . $result3);
        exit;
    }
}



?>