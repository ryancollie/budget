<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>New Income</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bugdgeting App</h1>
        <?php
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
        if($action === "fail")
        {
            echo "<p class='retry'>All fields are required";
        }
        ?>
        <form action="add.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name of income"><br>
            <input type="number" name="amount" id="amount" placeholder="Monthly amount"><br>
            <input type="hidden" name="action" value="income">
            <input type="submit" name="add" id="add" value="Add">
            <button type="button" onclick="location.href='main.php'">Cancel</button>
        </form>
    </body>

</html>