<?php


if (isset($_POST['submit_data'])) 
{    
    $username=$_POST['txtusername'];
    $password=$_POST['txtpassword'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="POST">
            <table align='center' border='1'>
            <tr>
                <td colspan='2' align='center'>Login Form</td>
            </tr>

            <tr>
                <td>username</td>
                <td><input type="text" name="txtusername"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="txtpassword"></td>
            </tr>

            <tr>
                <td colspan='2' align='center'><button type="submit" name="submit_data">Login</button></td>
            </tr>
            </table>
        </form>   
    </body>
</html>

