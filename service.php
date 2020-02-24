<?php
include "login.php";
header('Content-Type: application/json');

$db_servername = "localhost";
$db_username = "root";
$db_password = "admin";
$db_name = "budget";

$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

$sql = "select first, last from users where username = '".$user."'";

$arr = array();
while($row = $db_result->fetch_assoc()){	$arr[] = $row; }
$db_result->free();

echo '{"data":'.json_encode($arr) . '}';

$db_conn->close();
?>