<?php
session_start();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : '';

$db_servername = "localhost";
$db_username = "root";
$db_password = "admin";
$db_name = "budget";

$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

$name2 = trim($name);

if($action === "income")
{
    if(empty($name2) || empty($amount))
    {
        header("Location: newincome.php?action=fail");
    }
    else
    {
        $sql = "insert into income values('".$_SESSION["user"]."', '".$name."', ".$amount.")";
        $db_result = $db_conn->query($sql);
        header("Location: main.php");
    }
}
elseif($action === "expense")
{
    if(empty($name2) || empty($amount))
    {
        header("Location: newexpense.php?action=fail");
    }
    else
    {
        $sql = "insert into expense values('".$_SESSION["user"]."', '".$name."', ".$amount.")";
        $db_result = $db_conn->query($sql);
        header("Location: main.php");
    }
}
?>