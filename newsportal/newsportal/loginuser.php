<?php
session_start();
include("db.php");
$email = $_SESSION['email'];
$msg="";

// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password =$_POST['password'];
//     $_SESSION['username'] = $username;
//     $sql = "SELECT id, email,username, password FROM tbl_admin WHERE email = '$email' AND password = '$password'";
//     $result = $conn->query($sql);

//     $row = $result->fetch_assoc();
    

//     if ($result->num_rows == 1) {
//         $_SESSION['USER_ID']=$row['id'];
//         $_SESSION['email'] = $row['email'];      
//         header('Location:index.php');
//     } else {
        
//         $msg="Please enter Valid Details!";
        
        
//     }
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>News Portal</title>
	<link rel="stylesheet" href="loginuser.css">
	<script src="https://kit.fontawesome.com/d62b10e8dc.js" crossorigin="anonymous"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-n-plus-plus'></i>
      <span class="logo_name">News Portal</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="posts.php">
          <i class="fa-solid fa-newspaper"></i>
            <span class="links_name">Posts(News)</span>
          </a>
        </li>
		
		<li>
          <a href="category.php">
		  <i class='bx bx-user' ></i>
            <span class="links_name">Category</span>
          </a>
        </li>
        <li>
          <a href="sub-category.php">
		  <i class='bx bx-user' ></i>
            <span class="links_name">Sub-Category</span>
          </a>
        </li>
        <li>
			
		<a href="comments.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Comments</span>
          </a>
        </li>
        
        <li>

		<a href="About Us.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">About US</span>
          </a>
        </li>
        <li>

        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <span class="admin_name"><?php $sql = "SELECT username FROM tbl_admin WHERE email = '$email'";
  $result = $conn->query($sql);

   $row = $result->fetch_assoc(); ?><?php echo $row['username'];?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">LIVE NEWS</div>
            
            <div class="indicator">
			
              
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">LISTED CATEGORY</div>
            
            <div class="indicator">
			
            
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">LISTED SUBCATEGORY</div>
            
            <div class="indicator">
              
              
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">TRASH NEWS</div>
            
            <div class="indicator">
            </div>
          </div>
        </div>
      </div>
  
</body>
</html>


</body>
</html>
