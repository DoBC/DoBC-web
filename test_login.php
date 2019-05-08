<?php
if (isset($_SESSION["Login"])) 
    {
    if(!$_SESSION["Login"])
        {
            echo "Please login.<br>";
            echo "<a href='admin_login.php'>Back to login page</a>";
            die();
        }
    }   
    else 
    {
        echo "Please login.<br>";
        echo "<a href='admin_login.php'>Back to login page</a>";
        die();
    }
?>

