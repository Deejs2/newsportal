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
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats Box</title>
    <link rel="stylesheet" href="registerconfirm.css">
</head>
<body>
    <div class="container">
        <div class="popup" id="popup">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flat_tick_icon.svg/1024px-Flat_tick_icon.svg.png" width="110px" height="100px">
            <br>
            <h2>Thank You!</h2>
           
            <p>Your details has been successfully submitted. </p>
            <br>
               <p> Thanks!</p>
            <button type="submit" class="btn"><a href="index.php">Submit</a></button>

        </div>
    </div>

</body>
</html>