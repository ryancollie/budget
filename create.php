<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=UTF-8>
        <title>Create an account</title>
    </head>
    <body>
        <h1>Budgeting App</h1><br>
        <form action="welcome.html" method="get">
            Username <input type="text" id="user" name="user"><br>
            Password <input type="password" id="pass" name="user"><br>
            <input type="submit" id="login" name="login" value="Create account"><br>
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