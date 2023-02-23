<?php
session_start();
include("db.php");
$email=$_SESSION['email'];
$msg="";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description =$_POST['description'];
    $date = date('Y-m-d H:i:s');
    $categoryname = $_POST['categoryname'];
    

    //file upload 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/" . $filename;
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    $insertQuery = "INSERT INTO tbl_post (id, title,description,categoryname, postingdate,filename, updationdate) 
    VALUES ('', '$title','$description','$categoryname', '$date','$filename', '$date')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Post created successfully";
    }else{
        echo $conn->error;
    }



   // Redirect to index
    echo '<script>
window.location = "index.php";
</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <script src="https://kit.fontawesome.com/d62b10e8dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="post.css">

</head>
<body>
<main>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-n-plus-plus'></i>
      <span class="logo_name">News Portal</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="loginuser.php" class="active">
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
    <i class="fa-solid fa-comment"></i>
            <span class="links_name">Comments</span>
          </a>
        </li>
        
        <li>

		<a href="About Us.php">
    <i class="fa-solid fa-user"></i>
            <span class="links_name">About US</span>
          </a>
        </li>
        <li>

        <li class="log_out">
          <a href="logout.php">
          <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      
  </div>


<div style=" width: 100%; margin-right: 5000px; ">
  	    <form action="" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
			<h1>Add News</h1>
			<hr>
		  <div class="form-group">
		    <label for="title"> Title:</label>
		    <input type="text" placeholder="Title..." name="title" class="form-control" id="title">
		  </div>

		  <div class="form-group">
			  <label for="comment">Description:</label>
			 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"></textarea>
			</div>

			<div class="form-group">
		    <label for="date"> Date:</label>
		    <input type="date"  name="date" class="form-control" id="date">
		  </div>

           <div class="form-group">
		    <label for="image"> Image:</label>
		    <input type="file"  name="uploadfile" class="form-control img-thumbnail" id="image">
		  </div>

		    <div class="form-group">
		     <label for="category"> Category:</label>
  
		        <select class="form-control"  name="categoryname">
		       <?php
                include('db.php');
                  $query=mysqli_query($conn,"select * from category");

                while($row=mysqli_fetch_array($query)){
   	
                	?>
		        	 <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
               <option value="<?php echo $row['category_name1'];?>"><?php echo $row['category_name1'];?></option>
               <option value="<?php echo $row['category_name2'];?>"><?php echo $row['category_name2'];?></option>
               <option value="<?php echo $row['category_name3'];?>"><?php echo $row['category_name3'];?></option>
		        	 
                 <?php } ?>
		        </select>
		    </div>

        <div class="form-group" style="padding-top: 20px;">
        <input style="padding: 8px 15px;" type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>

		  
		</form>
		<!-- <script>
			
       function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
         if (x=="") {
          	alert('Title Must Be Filled Out !');
          	return false;
          }
          if (y=="") {
          	alert('Description Must Be Filled Out !');
          	return false;
          }
           if (y.length<10) {
          	alert('Description Atleast 100 character !');
          	return false;
          }
          
       }
 
		</script> -->

  </div>
</main>


</body>
</html>

