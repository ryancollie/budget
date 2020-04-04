<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create an account</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Budgeting App</h1><br>

        <?php
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
        if($action === "retryuser")
        {
            echo "<p class='retry'>Username taken</p>";
        }
        if($action === "retrypass")
        {
            echo "<p class='retry'>Passwords don't match</p>";
        }
        if($action === "empty")
        {
            echo "<p class='retry'>All fields required</p>";
        }
        ?>

        <form action="success.php" method="post">
            <input type="text" id="user" name="user" placeholder="Create a username">*<br>
            <input type="password" id="pass" name="pass" placeholder="Create a password">*<br>
            <input type="password" id="pass2" name="pass2" placeholder="Confirm password">*<br>
            <input type="text" id="first" name="first" placeholder="First name">*<br>
            <input type="text" id="last" name="last" placeholder="Last name">*<br>
            <input type="submit" id="login" name="create" value="Create account"><br>
        </form>
        <p><a href="index.php">Already have an account? Click here to login!</a></p>
        
    </body>
</html>