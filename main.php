<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Budgeting App</h1>
        <p><a href="login.php?action=logout">Logout</a></p>
        <?php
        $totalIncome = 0;
        $totalExpense = 0;
        $db_servername = "localhost";
        $db_username = "root";
        $db_password = "admin";
        $db_name = "budget";
        
        $db_conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
        if ($db_conn->connect_error) {
            die("Connection failed: " . $db_conn->connect_error);
        }

        $sql = "select first_name from users where username = '". $_SESSION["user"] ."'";
        $db_result = $db_conn->query($sql);

        if ($db_result->num_rows > 0) {
            
            while($row = $db_result->fetch_assoc()) {
                echo "Hello ". $row["first_name"] ."!<br>";
            }
        }
        ?>
        <h2>Income</h2>
        <?php
        $sql = "select * from income where username = '". $_SESSION["user"] ."'";
        $db_result = $db_conn->query($sql);

        if ($db_result->num_rows > 0) {
            
            while($row = $db_result->fetch_assoc()) {
                echo $row["name"].": $".$row["value"]."/month<br>";
                $totalIncome += $row["value"];
            }
        }

        echo "Total income: $".$totalIncome;
        ?>
        <p><a href="newincome.php">Add Income</a></p>

        <h2>Expenses</h2>
        
        <?php
        $sql = "select * from expense where username = '". $_SESSION["user"] ."'";
        $db_result = $db_conn->query($sql);

        if ($db_result->num_rows > 0) {
            
            while($row = $db_result->fetch_assoc()) {
                echo $row["name"].": $".$row["value"]."/month<br>";
                $totalExpense += $row["value"];
            }
        }

        echo "Total expenses: $".$totalExpense;
        ?>
        <p><a href="newexpense.php">Add Expense</a></p>

        <?php
        $available = $totalIncome - $totalExpense;
        if($available <= 0)
        {
            echo "<h3>Available funds: <span style='color:red'>$".$available."</span></h3>";
        }
        else
        {
            echo "<h3>Available funds: $".$available."</h3>";
        }
        ?>
    </body>
</html>