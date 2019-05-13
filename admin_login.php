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
        <div class="menu">
            <div class="menu-left">
                <a class="menu-banner" href="index.html">
                    <img class="logo-img" src="./img/DOB.svg">
                </a>
                <p style="font-style:italic; margin:auto 0px 0px auto; padding:10px">Designing how users interact with product</p>
            </div>
            <div class="menu-right">
                <a href="how_to_use_the_tool.html">How to use the tool</a>
                <a href="about.html">About</a>
                <a href="contact_us.html">Contact</a>
            </div>
        </div>
        <div class="txtAreaAdmin">
            <form action="" method="post">
            <p><b>Administrator login:</b></p>
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