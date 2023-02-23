<?php
session_start();
include("db.php");
$msg="";


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `tbl_admin` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['email']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill email and Password');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['email'])) {
        echo "<script>alert('Please Fill email);</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $email = $row['email'];
            $password = $row['password'];


            if ($email == $email && $password == $password) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location:loginuser.php');
            }
        } else {
            echo "<h3>Invalid email or Password</h3>";
            echo "<a href='login.php'>Go Back</a>";
            exit;
        }
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <title>NewsPortal - log in or sign up</title>
</head>
<body><div class="container">
            <form action="" method="post" class="user-login">
                <header class="row head">
                    <div class="col">
                        <h1 class="sign-up">Log In</h1>
                        <!-- <p class="discript">It's quick and easy.</p> -->
                    </div>
    <main>
        <!-- <div class="container-fluid content">
            <div class="container">
                <div class="row">
                    <div class="col-6 harry">
                    </div>
   -->
                            <div class="row username">
                                <div class="col">
                                        <label for="email" class="email">E-mail*</label><br/>
                                        <input type="email" id="email" name="email" class="input-email" title="Enter your e-mail" required/>
                                </div>
                            </div>
                            <div class="row password">
                                <div class="col">
                                    <label for="password" class="pass">Password*</label><br/>
                                    <input type="password" id="password" name="password" class="input-pass" title="Enter your password" required/>
                                </div>
                            </div>
                            <div class="row login-btn">
                                <div class="col">
                                 <form action="" method="post">
                                 <button type="submit" name="login" value="login">Login</button>
                        </form>   
                               
                                    <p class="forgot"><u><a href="forgotpassword.php">Forgot your password?</a></u></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>