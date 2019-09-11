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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-4">
        <h1>Welcome <?= $_SESSION['user']; ?></h1>   
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>