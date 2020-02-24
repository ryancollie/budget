<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=UTF-8>
        <title>Login</title>
    </head>
    <body>
        <h1>Budgeting App</h1><br>

        <?php
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
        if($action === "fail")
        {
            echo "<p>Invalid credentials</p>";
        }
        ?>
        
        <form action="login.php" method="post">
            <input type="text" id="user" name="user" placeholder="username"><br>
            <input type="password" id="pass" name="user" placeholder="password"><br>
            <input type="hidden" name="action" value="login">
            <input type="submit" id="login" name="login" value="Login"><br>
            <a href="create.php">No acccount? Click here to create one!</a>
        </form>
        
    </body>
</html>

