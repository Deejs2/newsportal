<?php
include('db.php');
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password=$_POST['password'];

    $insert = "INSERT INTO tbl_admin(username,email,password) 
    VALUES ('$username','$email','$password')";
    $result = $conn->query($insert);
    if($conn->insert_id){
        header('Location:registerconfirm.php');
    }else{
        echo $conn->error;
        header('Location:userregister.php');
    }  
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="userregister.css">
    <title>NewsPortal - log in or sign up</title>
</head>
<body>
    <main class="container">
        <div class="container">
            <form action="#" method="post" class="user-signup">
                <header class="row head">
                    <div class="col">
                        <h1 class="sign-up">Sign Up</h1>
                    </div>
                </header>
                <main class="row row-main">
                    <div class="col col-main">
                        <input class="user-name" type="text" placeholder="Username" name="username" title="What's your username?" required/><br/>
                        <input class="Email" type="email" placeholder="Enter your Email" name="email" title="Enter your email ID" required/><br/>
                        <input class="Password" type="password" placeholder="New password" name="password" title="Password must be 8 character long"required/><br/>
                    </div>
                </main>
                <footer class="row signup-btn">
                    <div class="col">
                    <button type="submit" name="submit">Register</a></button>
                    </div>
                </footer>
            </form>
        </div>
    </main>
</body>
</html>