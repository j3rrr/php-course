<?php

    if (isset($_POST['submit'])) {

        $name = ["Edwin", "Jonas", "Students", "Maria"];

        $minimum = 5;
        $maximum = 20;

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (strlen($username) < $minimum) {
            echo "Username has to be longer than 5" . '<br>';
        }
        if (strlen($username) > $maximum) {
            echo "Username has to be shorter than 10" . '<br>';
        }
        if (!in_array($username, $name)) {
            echo "Sorry, you can not login";
        } else {
            echo 'Welcome!';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="06_form.php" method="post">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password">
        <br>
        <input type="submit" name="submit">
    </form>

</body>

</html>