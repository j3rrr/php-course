<?php
    include "db.php";
    include "functions.php";
    readRow();
    include "includes/header.php";
?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Read Table</h1>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <pre>
            <?php
                print_r($row);
                ?>
            </pre>
        <?php
            }
        ?>
    </div>
</div>

<?php include "includes/footer.php";?>