<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=UTF-8>
        <title>Create an account</title>
    </head>
    <body>
        <h1>Budgeting App</h1><br>
        <form action="welcome.html" method="get">
            <input type="text" id="user" name="create" placeholder="Create a username">*<br>
            <input type="password" id="pass" name="create" placeholder="Create a password">*<br>
            <input type="text" id="first" name="create" placeholder="First name">*<br>
            <input type="text" id="last" name="create" placeholder="Last name">*<br>
            <input type="submit" id="login" name="create" value="Create account"><br>
        </form>
        
    </body>
</html>

<?php
$user = $_GET['user'];
$pass = $_GET['pass'];
$first = $_GET['first'];
$last = $_GET['last'];

$db_servername = "localhost";
$db_username = "root";
$db_password = "admin";
$db_name = "budget";


$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
} 


?>