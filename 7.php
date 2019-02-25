<?php include "functions.php";?>
<?php include "includes/header.php";?>

<?php

    $connection = mysqli_connect('localhost', 'root', '', 'section07');

    if (!$connection) {
        echo mysqli_error();
    } else {
        echo 'connected';
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "INSERT INTO contacts(name,phone,email)";
        $query .= "VALUES ('$name','$phone','$email')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query failed' . mysqli_error($connection));
        } else {
            echo "yay";
        }

    }
    $queryread = "SELECT * FROM contacts";

    $resultread = mysqli_query($connection, $queryread);

?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <form action="7.php" method="post">
            <input type="text" name="name" placeholder="name"><br>
            <input type="text" name="phone" placeholder="phone"><br>
            <input type="text" name="email" placeholder="email"><br>
            <input type="submit" name="submit">
        </form>

        <?php

            /*  Step 1 - Create a database in PHPmyadmin
            Step 2 - Create a table like the one from the lecture
            Step 3 - Insert some Data
            Step 4 - Connect to Database and read data
             */

            // Step 1 - DB Name: section07
            // Step 2 - Table Name: contacts -> id | name | phone | email

        ?>

        <br>

        <?php
            while ($row = mysqli_fetch_assoc($resultread)) {
            ?>
        <pre>
			<?php
                print_r($row);
                ?>
			</pre>
        <?php
            }

        ?>

    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php";?>