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
            <h1>Dimensions of behaviour change</h1> 
        </div>
        <div class="menu">
            <a href="how_to_use_the_tool.php">How to use the tool</a>
            <a href="about.php">About the tool</a>
            <a href="contact_us.php">Contact</a>
        </div>
        <div>
            <h3> Add or edit behaviour tool examples </h3>
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