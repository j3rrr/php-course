<?php include "functions.php";?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

            /*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

            Step 2: Make a forloop  that displays 10 numbers

            Step 3 : Make a switch Statement that test againts one condition with 5 cases

             */

            echo '<h1>Step 1</h1>';

            $number = 50;

            if ($number <= 99) {
                echo $number . " is less than 10";
            } elseif ($number >= 101) {
                echo $number . " is bigger than 100";
            } else {
                echo $number . " is 100. I love PHP";
            }

            echo '<h1>Step 2</h1>';

            for ($i = 0; $i < 10; $i++) {
                echo $i . '<br>';
            }

            echo '<h1>Step 3</h1>';

            switch ($number) {
                case 10:
                    echo 'Number is 10';
                    break;
                case 20:
                    echo 'Number is 20';
                    break;
                case 30:
                    echo 'Number is 30';
                    break;
                case 40:
                    echo 'Number is 40';
                    break;
                case 50:
                    echo 'Number is 50';
                    break;
                default:
                    echo 'Number is ' . $number;
                    break;
            }

        ?>

    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php";?>