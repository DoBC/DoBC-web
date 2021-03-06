<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Admin page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body style="overflow:auto"> <!-- Dette fordi den er overstyrt i .body i style.css-->
        <?php
        session_start();
        $db = mysqli_connect("localhost", "root", "", "dobc");
        include "test_login.php";
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
                <a href="contact_us.html">Suggestions</a>
                <a href="">Logout</a>
            </div>
        </div>
        <div class="txtAreaAdmin">
            <p><b> Add or edit behaviour tool examples</b></p>
            <table>
                <tr>
                    <td>Title: </td>
                    <td><input type="text" id="title"></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td><textarea rows="4" cols="50" id="description"></textarea></td>
                </tr>
                <tr>
                    <td>Upload example image: </td>
                    <td><input type="button" value="Choose file"></td>
                </tr>

            </table>
            <table>
                <tr><td>Metatags:</td></tr>
                <tr>
                    <td>Control:</td>
                </tr>
                <tr>
                    <td>User in control: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Product in control: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Obtrusiveness:</td>
                </tr>
                <tr>
                    <td>Obtrusive: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Unobtrusive: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Meaning:</td>
                </tr>
                <tr>
                    <td>Emotional: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Rational: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Exposure:</td>
                </tr>
                <tr>
                    <td>Rarely: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Frequently: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Encouragement:</td>
                </tr>
                <tr>
                    <td>Promote: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Discourage: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Timing:</td>
                </tr>
                <tr>
                    <td>Before use: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>During interaction: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>After use: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Empathy:</td>
                </tr>
                <tr>
                    <td>Me: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Others: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Importance:</td>
                </tr>
                <tr>
                    <td>Important: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Unimportant: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Direction:</td>
                </tr>
                <tr>
                    <td>In line: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr>
                    <td>Opposing: </td>
                    <td><input type="checkbox" value="" id=""></td>
                </tr>
                <tr><td></td></tr>
                <tr><td><input type="button" value="Upload example"></td></tr>
            </table>
        </div>
    </body>
</html>