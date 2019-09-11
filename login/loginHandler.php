<?php
// session_start();
include '../config/init.php';

if (isset($_POST["submit"])) {
    
    $email = mysqli_escape_string($conn,$_POST['email']);
    $password = mysqli_escape_string($conn,$_POST['password']);
    
    $sql = "select * from registeruser where email = '$email' and password= '$password'";
    $sqlRun = $conn->query($sql);
    $count = $sqlRun->num_rows;

    // echo $count;
    
    if($count == 1){
        $user = $sqlRun->fetch_object();
        // var_dump($user);
        // exit;
        $_SESSION['loggedId'] = $user->user_id;
        $_SESSION['user'] = $user->fullname;
        header('location:../dashboard/index.php');

    }
    else
    {
        $_SESSION['msg'] = "Invalid login details";
        $loc='../login/login.php';
        header("Location:$loc");
        die(0);
    }    
}
