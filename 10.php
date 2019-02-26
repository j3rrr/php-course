<?php include "functions.php";?>
<?php include "includes/header.php";?>
<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->

    <article class="main-content col-xs-8">


        <?php

            /*  Step 1: Use the Make a class called Dog
            Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
            Step 4: Make a method named ShowAll that echos all the properties
            Step 5: Instantiate the class / create object and call it pitbull
            Step 6: Call the method ShowAll
             */

            class Dog
            {
                public $eyecolor;
                public $furcolor;
                public $type;

                public function __construct($eyecolor, $furcolor, $type)
                {
                    $this->eyecolor = $eyecolor;
                    $this->furcolor = $furcolor;
                    $this->type = $type;
                }

                public function showAll()
                {
                    echo '<p>';
                    echo 'Eyes: ' . $this->eyecolor . '<br>';
                    echo 'Fur: ' . $this->furcolor . '<br>';
                    echo 'Type: ' . $this->type;
                    echo '</p>';
                }

            }

            $pitbull = new Dog("brown", "white", "pitbull");
            $pitbull->showAll();

            $mops = new Dog('black', 'brown', 'mops');
            $mops->showAll();

        ?>


    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php";?>