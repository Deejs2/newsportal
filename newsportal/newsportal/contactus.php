<?php
session_start();
include("db.php");
$msg="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $_SESSION['username'] = $username;
    $sql = "SELECT id, email,username, password FROM tbl_admin WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    

    if ($result->num_rows == 1) {
        $_SESSION['USER_ID']=$row['id'];
        $_SESSION['email'] = $row['email'];      
        header('Location:index.php');
    } else {
        
        $msg="Please enter Valid Details!";
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
<form action="action_page.php" method="post">
    <header>
    <h2>NewsPortal</h2>
<nav>
            <a href="index.php">Home</a>
            <a href="aboutus.php">About</a>
            <a href="contactus.php">Contact</a>
            <a href="login.php">Log in</a>
            <a href="userregister.php">Register</a>
</header>
<div class="contact">Contact Details
    <br>
    <br>
<p>Address: Bauddha, Nayabasti
    <br>
    Phone Number : +9779840089419  
<br>
Email-id : khanalbk18@gmail.com
</p>
</div>
</body>
</html>