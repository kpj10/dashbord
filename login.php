<?php
include 'config.php';

if (isset($_POST['submit_data'])) 
{    
    $mail=$_POST['txtmail'];
    $password=$_POST['txtpassword'];

    $sql="select count(email) as mail from newuser where email='".$mail."' AND password='".$password."' ";
    $fatch_data=mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($fatch_data);

    if($row["mail"] == 1)
    {
         echo "<script>alert('User Match');</script>";  
    }
    else
    {
        echo "<script>alert('I See Some Error');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <style>
            .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

            body {background-color: #C2FBFF;}
        </style>
        
    </head>
    <body bgcolor="#C2FBFF">
   <!-- <img src="p1.jpeg" class="img-fluid" alt="Responsive image"> -->
    
    <form method="POST">
        <div class="container-fluid">  
 
            <div class="centered">
            <div class="card" style="width: 300px;">
                <div class="card-header">
                    Welcome to World
                </div>

                <div class="body">
                <table align='center'>
                
                    <div class="form-group">
                        <tr>
                            <td>
                                <label class="card-title">Email</label>
                                <input class="form-control" type="text" name="txtmail" placeholder="Your Email">
                            </td>
                        </tr>
                         
                        <tr>
                            <td>
                                <label class="card-title">Password</label>
                                <input class="form-control" type="password" name="txtpassword">
                            </td>
                        </tr>
                            
                        <tr>
                            <td>
                                <div name="btn">
                                <button class="btn btn-primary" type="submit" name="submit_data">Login to Explore</button>   
                                <a href="newuser.php">New User</a>     
                                </div>
                            </td></tr>
                        
                    </div>
                </table>    
                </div>
            </div>
            </div>
           </img> 
       </div>     
    </form>     
    </body>
</html>

