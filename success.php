<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Account creation</title>
    </head>
    <body>
        <?php
        $user = isset($_REQUEST['user']) ? $_REQUEST['user'] : '';
        $pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : '';
        $pass2 = isset($_REQUEST['pass2']) ? $_REQUEST['pass2'] : '';
        $first = isset($_REQUEST['first']) ? $_REQUEST['first'] : '';
        $last = isset($_REQUEST['last']) ? $_REQUEST['last'] : '';

        $db_servername = "localhost";
        $db_username = "root";
        $db_password = "admin";
        $db_name = "budget";

        $db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

        if ($db_conn->connect_error) 
        {
            die("Connection failed: " . $db_conn->connect_error);
        } 

        $sql = "select * from login where username = '".$user."'";

        $db_result = $db_conn->query($sql);

        if ($db_result->num_rows > 0) 
        {
            header("Location: create.php?action=retryuser");
        }
        elseif ($pass !== $pass2)
        {
            header("Location: create.php?action=retrypass");
        }
        elseif(empty($user) || empty($pass) || empty($pass2))
        {
            header("Location: create.php?action=empty");
        }
        else
        {
            echo "<h1 style='text-align: center'><a href=\"index.php\">Account created. Click here to login.</a></h1>";
            $sql = "insert into login values ('".$user."', '".$pass."')";
            $db_conn->query($sql);
            $sql = "insert into users values ('".$user."', '".$first."', '".$last."')";
            $db_conn->query($sql);
        }

        ?>
    </body>
</html>

