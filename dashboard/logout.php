<?php 
    include '../config/init.php';
    session_unset();
    header('location:../login/login.php');