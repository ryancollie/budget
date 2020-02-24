<?php
session_start();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if(action === "login")
{
    $user = isset($_REQUEST['user']) ? $_REQUEST['user'] : '';
    $pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : '';

    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "admin";
    $db_name = "budget";

    $db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
    if ($db_conn->connect_error) {
        die("Connection failed: " . $db_conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username = '".$user."' and password = '".$pass."'";

    $db_result = $db_conn->query($sql);

	if ($db_result->num_rows > 0) {
		$_SESSION["isLoggedIn"] = true;
		$_SESSION["username"] = $username;
    }
    elseif ($action === "logout") {
					
        session_unset(); 
        session_destroy(); 	
        
    }

    $isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

    if($isLoggedIn)
    {
        header("Location: main.php");
    }
    else
    {
        header("Location: index.php?action=fail");
    }
}
?>