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

        // array(); oder []

        $numberList = array(268, 8765, 345, '5345', '345');

        //echo $numberList[0];
        //Array lesbar
        //print_r($numberList);
        //echo $numberList[1];

        echo '<br>';

        //associative Arrays

        $names = array(
            'first_name' => 'Edwin',
            'last_name' => 'Diaz',
        );

        //print_r($names);
        echo $names['first_name'] . " " . $names['last_name'];

    ?>
</body>

</html>