<?php 
    include '../config/init.php';
    if(isset($_SESSION['loggedId']))
    {   
        // $_SESSION['msg'] = "Please login to continue";
        header('location:../dashboard/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <h1>Login Form</h1>
        <form action="loginHandler.php" method="POST">
            <table class="login_table">
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required="required"/></td>
                    
                </tr>
                <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required="required"/></td>
                </tr>
                    


            </table>
            <input type="submit" name='submit' value="Log in"/>
        </form>
        <a href="../register/register.php">Are you new? click here</a>
    </div>
</body>
</html>