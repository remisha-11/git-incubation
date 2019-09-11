<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "librarianadmin");


    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    //check connection
        if($conn->connect_error)
        {
            die("Connection error:".$conn->connect_error);
        }
        echo"Connected successfully";
        echo"<br>";
    
    //create database
  /*  $sql="CREATE DATABASE librarianadmin";
        if($conn->query($sql)==TRUE)
        {
            echo"Database created successfully";
        }
        else
        {
            echo"Error creating database:".$conn->error;
        }

    //sql to create table
    $sql="CREATE TABLE registeruser(
        user_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        address VARCHAR(30) NOT NULL,
        contact VARCHAR(15) NOT NULL,
        email VARCHAR(50),
        password VARCHAR(50),
        confirmPassword VARCHAR(50)
        )";

        if($conn->query($sql)==TRUE){
            echo"Table RegisterUser created successfully";
        }
        else{
            echo"Error creating table:".$conn->error;
        }
        */

    //to directly insert all the data set by user(registeruser) in database
    $Fullname=$_POST["name"];
    $Address=$_POST["address"];
    $Contact=$_POST["contact"];
    $Email=$_POST["email"];
    $Password=$_POST["password"];
    $ConfirmPassword=$_POST["confirmPassword"];

    $sql="INSERT INTO registeruser(fullname,address,contact,email,password,confirmPassword) VALUES ('$Fullname','$Address','$Contact','$Email','$Password','$ConfirmPassword')";
        if($conn->query($sql)==TRUE)
        {
            echo"New record created successfully";

            //redirect to login page
            $loc='../login/login.php';
            header("Location:$loc");
            die(0);
        }
        else{
            echo"Error:".$sql."<br>".$conn->error;
        }
    $conn->close();
    
?>