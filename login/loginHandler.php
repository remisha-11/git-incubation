
<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'registerHandler.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "select * from registeruser where email = '$email' and password= '$password'";
    $user = $conn->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $user_id = $result[0]['user_id'];
    $name = $result[0]['fullname'];
    $address = $result[0]['address'];
    $contact = $result[0]['contact'];

    $email = $result[0]['email'];
    $_SESSION['fullname'] = $name;
    $_SESSION['id'] = $id;
    
    $conn->closeConnection();
    header('location: dashboard.php');
}
?>