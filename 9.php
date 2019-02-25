<?php include "functions.php";?>
<?php include "includes/header.php";?>

<?php

    //Cookie
    $name = "lesson9cookie";
    $value = "Cookie Value";
    $expire = time() + (60 * 60 * 24 * 7);
    setcookie($name, $value, $expire);

    session_start();
    $_SESSION['message'] = "Session Message";

?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">



        <?php

            /*  Create a link saying Click Here, and set
            the link href to pass some parameters and use the GET super global to see it
            Step 2 - Set a cookie that expires in one week
            Step 3 - Start a session and set it to value, any value you want.
             */

        ?>

        <?php
            $id = 200;
            if (isset($_GET['id'])) {
                echo $_GET['id'];
            }
        ?>
        <br>
        <a href="9.php?id=<?php echo $id; ?>">Click Here</a>
        <br>
        <?php echo $_SESSION['message']; ?>
        <br>
        <?php

            if (isset($_COOKIE['lesson9cookie'])) {
                echo $_COOKIE['lesson9cookie'];
            }

        ?>



    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php";?>