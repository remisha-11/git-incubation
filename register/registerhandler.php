<?php

    include '../config/init.php';
    
    $Fullname=$_POST["name"];
    $Address=$_POST["address"];
    $Contact=$_POST["contact"];
    $Email=$_POST["email"];
    $Password=$_POST["password"];
    $ConfirmPassword=$_POST["confirmPassword"];

    $sql="INSERT INTO registeruser(fullname,address,contact,email,password,confirmPassword) VALUES ('$Fullname','$Address','$Contact','$Email','$Password','$ConfirmPassword')";

    if($conn->query($sql)==TRUE)
    {
        // echo"New record created successfully";

        //redirect to login page
        $_SESSION['msg'] = "New user added";
        $loc='../login/login.php';
        header("Location:$loc");
        die(0);
    }
    else{
        echo"Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
    
