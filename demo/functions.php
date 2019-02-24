<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

        /**
         * 22
         */

        echo '<h1>22 - Basic Functions</h1>';

        init();

        function init()
        {
            say_Something();
            echo '<br>';
            calculate();
        }

        function say_Something()
        {
            echo "Hello Student, do you like the class?";
        }

        function calculate()
        {
            echo 2 + 10;
        }

        /**
         * 23
         */

        echo '<h1>23 - Passing Parameters</h1>';

        function greeting($message)
        {
            echo $message . '<br>';
        }

        greeting("Hello Student");

        function addNumbers($number1, $number2)
        {
            $sum = $number1 + $number2;
            echo $sum;
        }

        addNumbers(10, 5);

        /**
         * 24
         */

        echo '<h1>24 - Return Values from Functions</h1>';

        function addNumbersReturn($a, $b)
        {
            $sum = $a + $b;
            return $sum;
        }

        $result = addNumbersReturn(10, 20);
        echo $result . '<br>';
        $result = addNumbersReturn(100, $result);
        echo $result;

        /**
         * 25
         */

        echo '<h1>25 - Global Variable and Scope</h1>';

        $x = "outside";

        function convert()
        {
            global $x;
            $x = "inside";
        }

        echo $x . '<br>';
        convert();
        echo $x;

        /**
         * 26
         */

        echo '<h1>26 - Constants</h1>';

        $number = 10;
        echo $number . '<br>';

        define("NAME", 1000); // Kann nicht verändert werden
        echo NAME;

    ?>

</body>

</html>