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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body background='p1.jpeg'>
   <!-- <img src="p1.jpeg" class="img-fluid" alt="Responsive image"> -->
    
    <form method="POST">
        <div class="container">  
            <div class="card" style="width: 250px;">
                <div class="card-header">
                    Welcome to World
                </div>

                <div class="body">
                <table align='center'>
                
                    <div class="form-group">
                        <tr>
                            <td>
                                <label class="card-title">Email</label>
                                <input class="form-control" type="text" name="txtusername" placeholder="Your Email">
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
                                <button class="btn btn-primary" type="submit" name="submit_data">Login to Explor</button>        
                                </div>
                            </td></tr>
                        
                    </div>
                </table>    
                </div>
            </div>
       </div>     
    </form>     
    </body>
</html>

