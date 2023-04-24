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
        <h4>Question 1</h4>
        <input type="radio" name="rQuest1" value="Answer1">
        <label for="check">Answer1</label>
        <input type="radio" name="rQuest1" value="Answer2">
        <label for="check">Answer2</label>
        <input type="radio" name="rQuest1" value="Answer3">
        <label for="check">Answer3</label>
        <input type="radio" name="rQuest1" value="Answer4">
        <label for="check">Answer4</label>
        <br>

        <h4>Question 2</h4>
        <input type="radio" name="rQuest2" value="Answer1">
        <label for="check">Answer1</label>
        <input type="radio" name="rQuest2" value="Answer2">
        <label for="check">Answer2</label>
        <input type="radio" name="rQuest2" value="Answer3">
        <label for="check">Answer3</label>
        <input type="radio" name="rQuest2" value="Answer4">
        <label for="check">Answer4</label>
        <br>

        <h4>Question 3</h4>
        <input type="radio" name="rQuest3" value="Answer1">
        <label for="check">Answer1</label>
        <input type="radio" name="rQuest3" value="Answer2">
        <label for="check">Answer2</label>
        <input type="radio" name="rQuest3" value="Answer3">
        <label for="check">Answer3</label>
        <input type="radio" name="rQuest3" value="Answer4">
        <label for="check">Answer4</label>
        <br>

        <h4>Question 4</h4>
        <input type="radio" name="rQuest4" value="Answer1">
        <label for="check">Answer1</label>
        <input type="radio" name="rQuest4" value="Answer2">
        <label for="check">Answer2</label>
        <input type="radio" name="rQuest4" value="Answer3">
        <label for="check">Answer3</label>
        <input type="radio" name="rQuest4" value="Answer4">
        <label for="check">Answer4</label>
        <br>

        <button type="submit" name="nextBtn">Next</button>
    </form>
</body>
</html>
<?php
$result2 = intval($_GET['result']);
echo "RESULT: " . $result2;
if (isset($_POST['nextBtn'])) {
    if (empty($_POST['rQuest1']) || empty($_POST['rQuest2']) || empty($_POST['rQuest3']) || empty($_POST['rQuest4'])) {
        echo "<h2>Please, make all questions answered!</h2>";
    }
    else{
        if ($_POST['rQuest1'] == 'Answer3') {
            $result2 += 3;
        }
        if ($_POST['rQuest2'] == 'Answer2') {
            $result2 += 3;
        }
        if ($_POST['rQuest1'] == 'Answer4') {
            $result2 += 3;
        }
        if ($_POST['rQuest1'] == 'Answer2') {
            $result2 += 3;
        }
        header('Location: 3rd_level.php?result2=' . $result2);
        exit;
    }
}



?>