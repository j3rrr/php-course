<?php include "functions.php";?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

            /*  Step1: Define a function and make it return a calculation of 2 numbers

            Step 2: Make a function that passes parameters and call it using parameter values

             */

            function calculate()
            {
                $a = 10;
                $b = 20;
                $sum = $a + $b;
                return $sum;
            }

            echo calculate() . '<br>';

            function calcInput($a, $b)
            {
                $sum = $a + $b;
                return $sum;
            }

            echo calcInput(1, 2);

        ?>

    </article>
    <!--MAIN CONTENT-->


    <?php include "includes/footer.php";?>