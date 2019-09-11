<?php 
        include '../config/init.php';
      if(!isset($_SESSION['loggedId']))
      {   
          $_SESSION['msg'] = "Please login to continue";
          header('location:../login/login.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Register Form</title>
   
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form action="registerHandler.php" method="POST">
            <div class="form-group col-md-4">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter fullname">        
            </div>
            <div class="form-group col-md-4">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter address">
            </div>
            <div class="form-group col-md-4">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter contact number">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="form-group col-md-4">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" placeholder="Retype password">
            </div>
            <div class="form-group center-block">
                    <button type="submit" class="btn btn-primary ml-5">Submit</button>&nbsp;
                    <button type="reset" class="btn btn-primary center-block">Cancel</button>
            </div>
            
            
        </form>
        <a href="../login/login.php">Allready have account</a>
    </div>
    
</body>
</html>