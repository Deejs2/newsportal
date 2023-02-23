<?php

include("db.php");
$msg="";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.min.css">
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
            
</header>

<?php

$sql = "SELECT id, title,description,categoryname, postingdate,filename, updationdate FROM tbl_post";
$result = $conn->query($sql);

?>

<div class="container">
    <h2 style="text-align: center; padding: 20px 5px">Today News</h2>

    <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
<div class="col" style="padding: 10px 0px;">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-6">
                  <img src="image/<?php echo $row['filename'];?>" height="500px" width="auto">
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <h3 class="card-title"><?php echo $row['title'];?></h3>
                    <p class="card-text"><?php echo $row['description'];?></p>
                    <p class="card-text"><small class="text-muted">Last updated : <?php echo $row['updationdate'];?></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
                }
            }
            ?>
</div>


</body>
</html>