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