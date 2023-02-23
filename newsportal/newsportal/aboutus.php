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
    <title>About Us</title>
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>
    <header>
    <h2>NewsPortal</h2>
<nav>
            <a href="index.php">Home</a>
            <a href="aboutus.php">About</a>
            <a href="contactus.php">Contact</a>
            <a href="login.php">Log in</a>
            <a href="userregister.php">Register</a>
</nav>
</header>
 
<div class="about-section">
  <h1>About Us Page</h1>
  <br>
  <p>Some text about who we are and what we do.</p>
<br>
<P> Admins details of the site NewsPortal</p>
</div>
<br>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
       
      <div class="container">
        <h2>Bikash Khanal</h2>
        <p class="title">Designer</p>
        <p>Digital Creator.</p>
        <p>khanalbk18@gmail.com</p>
        <br>
        <p><button class="button"><a href="https://www.facebook.com/khanal.Jrbikash">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Samir Adhikari</h2>
        <p class="title">Designer</p>
        <p>Digital Creator.</p>
        <p>adhikari0015@gmail.com</p>
        <br>
        <p><button class="button"><a href="https://www.facebook.com/samir.adhikari.3382">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Raj Kumar Shrestha</h2>
        <p class="title">Designer</p>
        <p>Digital Creator.</p>
        <p>raaz44174@gmail.com</p>
        <br>
        <p><button class="button"><a href="https://www.facebook.com/raaz458">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Prabin Shrestha </h2>
        <p class="title">Designer</p>
        <p>Digital Creator.</p>
        <p>Prabinj3210@gmail.com</p>
        <br>
        <p><button class="button"><a href="https://www.facebook.com/prabin.shrestha.58118774">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Ujwal Shrestha</h2>
        <p class="title">Designer</p>
        <p>Enterpreneur.</p>
        <p>itsujwal@gmail.com</p>
        <br>
        <p><button class="button"><a href="https://www.facebook.com/me.Samir.shrestha">Contact</a></button></p>
      </div>
    </div>
  </div>

</div>

</body>
</html>

