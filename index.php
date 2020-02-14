<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=UTF-8>
        <title>Budgeting App</title>
    </head>
    <body>
        <h1>Budgeting App</h1><br>
        
        <form action="" method="get">
            <input type="text" id="user" name="user" placeholder="username"><br>
            <input type="password" id="pass" name="user" placeholder="password"><br>
            <input type="submit" id="login" name="login" value="Login"><br>
            <a href="create.php">No acccount? Click here to create one!</a>
        </form>
        
    </body>
</html>

<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

$db_servername = "localhost";
$db_username = "root";
$db_password = "admin";
$db_name = "budget";


$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 


?>