<?php
session_start();
include("db.php");
$msg="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $_SESSION['username'] = $username;
    $sql = "SELECT id, email,username, password FROM tbl_category WHERE email = '$email' AND password = '$password'";
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
    <title>Categories</title>
    <link rel="stylesheet" href="category.css">

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
  <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index.php">Home</a>
          <a class="p-2 text-muted" href="#">World</a>
         
          <a class="p-2 text-muted" href="category_page.php?single=<?php echo$row['category_name'];  ?>">Technology</a>
          
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
</body>
</html>