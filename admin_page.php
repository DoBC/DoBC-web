<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Admin page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <?php
        session_start();
        $db = mysqli_connect("localhost", "root", "", "dobc");
        include "test_login.php";
        ?>
        <div>
            <h1>Behaviour tool</h1> 
        </div>
        <div class="menu">
            <a href="how_to_use_the_tool.php">How to use the tool</a>
            <a href="about.php">About the tool</a>
            <a href="contact_us.php">Contact</a>
        </div>
    </body>
</html>