<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            border: 1px solid red;
        }
        .textRed{
            color: red;
            margin: 0;
        }

    </style>
</head>
<body>
    <form method="post">
        <div>
            <?php
            if (isset($_POST['name'])) {
                if($_POST['name'] == "User")
                {
                    echo "<input class='error' placeholder='Name' name='name' required><p class='textRed'>User with the same login is already registered</p>";
                }
                else{
                    echo "<input placeholder='Name' name='name' required>";
                }
            }
            else{
                echo "<input placeholder='Name' name='name' required>";
            }
            echo "<br/>";
            if (isset($_POST['pass'])) {
                if(strlen($_POST['pass']) < 8)
                {
                    echo "<input class='error' placeholder='Pass' name='pass' type='password' required><p class='textRed'>Password must contain a minimum of 8 characters</p>";
                }
                else{
                    echo "<input placeholder='Pass' name='pass' type='password' required>";
                }
            }
            else{
                echo "<input placeholder='Pass' name='pass' type='password' required>";
            }
            echo "<br/>";
            if (isset($_POST['conf_pass'])) {
                if ($_POST['conf_pass'] != $_POST['pass']) {
                    echo '<input class="error" placeholder="Confirm pass" name="conf_pass" type="password" required><p class="textRed">Passwords must match</p>';
                }
                else{
                    echo '<input placeholder="Confirm pass" name="conf_pass" type="password" required>';
                }
            }
            else{
                echo '<input placeholder="Confirm pass" name="conf_pass" type="password" required>';
            }
            echo "<br/>";
            if (isset($_POST['email'])) {
                echo '<input placeholder="Email" name="email" type="email" required>';
            }
            else{
                echo '<input placeholder="Email" name="email" type="email" required>';
            }
            echo "<br/>";
            if (isset($_POST['number'])) {
                if (strlen($_POST['number']) < 10) {
                    echo '<input class="error" placeholder="Number" name="number" type="number" required><p class="textRed">Phone isn\'t correct</p>';
                }
                else{
                    echo '<input placeholder="Number" name="number" type="number" required>';
                }
            }
            else{
                echo '<input placeholder="Number" name="number" type="number" required>';
            }
            ?>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>