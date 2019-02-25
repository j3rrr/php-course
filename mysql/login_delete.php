<?php
    include "db.php";
    include "functions.php";
    deleteRow();
    include "includes/header.php";
?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Delete Table</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id">
                    <?php showAllData();?>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Delete">
        </form>
    </div>
</div>

<?php include "includes/footer.php";?>