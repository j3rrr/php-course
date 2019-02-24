<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>While Loop</h1>
    <?php

        $counter = 0;

        while ($counter < 10) {
            echo $counter . '<br>';
            $counter++;
        }
    ?>

    <h1>For Loop</h1>
    <?php

        for ($counter = 0; $counter < 10; $counter++) {
            echo $counter . '<br>';
        }

    ?>

    <h1>Foreach Loop (Arrays)</h1>
    <?php

        $numbers = [345, 676, 220, 6589, 6121];

        foreach ($numbers as $number) {
            echo $number . '<br>';
        }

    ?>
</body>

</html>