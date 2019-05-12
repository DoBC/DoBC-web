<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Admin login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <?php
        session_start();
        ob_start();
        // her bør det være feilhåndtering
        $db = mysqli_connect("localhost", "root", "", "dobc");
        $_SESSION["Innlogget"]=false; 
        ?>
        <div>
            <h1>Dimensions of Behaviour Change</h1>
        </div>
        <div class="menu">
            <a href="how_to_use_the_tool.php">How to use the tool</a>
            <a href="about.php">About</a>
            <a href="contact_us.php">Contact</a>
        </div>
        <div>
            <form action="" method="post">
            <h3>Administrator login:</h3>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username">
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password">
                    </tr>
                    <tr><td><input type="submit" name="login" value="Login"></td></tr>
                </table>
            </form>
        </div>
        <?php
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $sql= "SELECT Password FROM admin WHERE Username = '$username'";
            $resultat = $db->query($sql);
            if($db->affected_rows>=1) {
                    $rad = $resultat->fetch_object();
                    $passwordHash= $rad->Password;
                    $ok = password_verify($password, $passwordHash);
                    if($ok) {
                        header("Location: ./admin_page.php");
                        $_SESSION["Login"] = true;
                    } else {
                        echo "Invalid password";
                    }                      
                } else {
                    echo "Username does not exist!";
            }
        }
        ?>
    </body>
</html>