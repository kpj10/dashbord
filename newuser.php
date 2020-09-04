<?php
include 'config.php';

if (isset($_POST['makenew'])) 
{    
    $username=$_POST['txtusername'];
    $phone_no=$_POST['txtmobile'];
    $mail=$_POST['txtmail'];
    $password=$_POST['txtpassword'];

    $sql = "insert into newuser(name,number,email,password) values('".$username."','".$phone_no."','".$mail."','".$password."')";

    $add_data=execute($con,$sql);

    if ($add_data) 
    {
        echo "<script>alert('Your Data Register Successfully');</script>";
        //header('location:login.php');
    } else {
        echo "<script>alert('I See Some Error');</script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry</title>

    <style>
        #tab_border{
            border-style: outset; 
        }
        
        body {background-color: #C2FBFF;}
    </style>
    
</head>
<body>
    <form method="POST">
    <div class='container'>
    <div class="row">

<div class="col-sm"></div>

<div class="col-sm" id="tab_border">    
    <table class="table">
        <tr>
            <td>
                <label class="card-title">Name</label>
                <input class="form-control" type="text" name="txtusername" placeholder="Your Name">
            </td>
        </tr>
        
        <tr>
            <td>
                <label class="card-title">Phone Number</label>
                <input class="form-control" type="text" name="txtmobile" placeholder="Your Phone Number">
            </td>
        </tr>

        <tr>
            <td>
                <label class="card-title">Email</label>
                <input class="form-control" type="text" name="txtmail" placeholder="Your Name">
            </td>
        </tr>

        <tr>
            <td>
                <label class="card-title">Password</label>
                <input class="form-control" type="password" name="txtpassword" placeholder="Your Password">
            </td>
        </tr>

        <tr>
            <td>
                <button type="submit" class="btn btn-outline-primary" name="makenew">Register your Details</button>
            </td>
        </tr>

    </table>
</div>

<div class="col-sm"></div>
      
    </div>  
    </div>  
    </form>
</body>
</html>