<?php include "functions.php";?>
<?php include "includes/header.php";?>
<section class="content">

    <aside class="col-xs-4">
        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

            /*  Step1: Use a pre-built math function here and echo it

            Step 2:  Use a pre-built string function here and echo it

            Step 3:  Use a pre-built Array function here and echo it

             */

            echo '<h1>Step 1</h1>';

            echo "Dezimal 200 in Binär" . '<br>';
            echo decbin(200) . '<br>';

            echo '<h1>Step 2</h1>';

            $string = "Das ist ein Teststring";
            echo "strrev kehrt einen String um" . '<br>';
            echo strrev($string) . '<br>';

            echo '<h1>Step 3</h1>';

            $list = [20, "wort1", 20, "wort2", 30, "wort1"];

            echo "array_count_values zählt die Werte eines Arrays" . '<br>';

            print_r(array_count_values($list));

            echo "<br>in_array prüft, ob ein Wert in einem Array existiert" . '<br>';

            $found = in_array(30, $list);

            if ($found) {
                echo "Gefunden!";
            } else {
                echo "Nicht gefunden...";
            }

        ?>

    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php";?>