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
         * 28
         * http://php.net/ref.math
         */

        echo '<h1>28 - Math Functions</h1>';

        // a hoch b
        echo pow(2, 2) . '<br>';
        // random number zwischen a und b
        echo rand(1, 1000) . '<br>';
        // Wurzel
        echo sqrt(100) . '<br>';
        // aufrunden
        echo ceil(4.6) . '<br>';
        // abrunden
        echo floor(4.6) . '<br>';
        // runden je nach dezimal
        echo round(7.6) . '<br>';

        /**
         * 29
         * http://php.net/ref.strings
         */

        echo '<h1>29 - String Functions</h1>';

        // Länge eines Strings (inkl. leer)
        $string = "Hello student do you like the class";
        echo strlen($string) . '<br>';
        // Uppercase
        echo strtoupper($string) . '<br>';
        // Lowercase
        echo strtolower($string) . '<br>';

        /**
         * 30
         * http://php.net/ref.array
         */

        echo '<h1>30 - Array Functions</h1>';

        $list = [24, 10, 2222, 694, 54, 1001];
        // Größter Wert im Array
        echo max($list) . '<br>';
        // Kleinster Wert im Array
        echo min($list) . '<br>';
        // Array lesbar darstellen und sortieren
        sort($list);
        print_r($list);

    ?>

</body>

</html>