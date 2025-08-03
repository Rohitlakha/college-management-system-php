<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1">
    
    <title>University Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="precommect" href="https://fonts.gstatic.com">
    <link  href="https://fonts.googleapis.com/css2?
    family=Poppins:wgh@100;200;300;400;600;700;&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.2/css/font-awesome.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
<section class="sub-header" >
    <nav>
        <a href="index.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="adminIndex.php">HOME</a></li>
                <div class="dropdown">
                  <button class="dropbtn" style="font-size: 13px;">COURSE</button>
                  <div class="dropdown-content">
                    <a href="courseADD.php">ADD</a>
                    <a href="courseManage.php">MANAGE</a>
                  </div>
                </div>
                <li><a href="ManageStudent.php">STUDENT</a></li>
                <li><a href="Manageblog.php">BLOG</a></li>
                <li><a href="Managecontact.php">CONTACT</a></li>
                <li><a href="index.html">LOGOUT</a></li>
        </div>
        <i class="fa fa-bars" onclick="showMenu()" ></i>
    </nav>
        <h1>MANAGE COURSES</h1>
        
        
    
</section>


<div class="container mt-5 my-5" >
    <center><h2>MANAGE</h2></center>
    <?php 
    include 'connection.php';

    $sql = "SELECT * FROM courseadd ";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th style="background-color: #333; color: #fff;">ID</th>
          <th style="background-color: #333; color: #fff;">Course Name</th>
          <th style="background-color: #333; color: #fff;">Semester</th>
          <th style="background-color: #333; color: #fff;">Manage</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['semester']; ?></td>
                
                <td>
                    <button type="button" class="btn btn-success"><a style="text-decoration: none; color: white;"  href='editcourse.php?id=<?php echo $row['Id']; ?>'>Edit</a></button>
                    <button type="button" class="btn btn-danger"><a style="text-decoration: none; color: white;" href='delete-course.php?id=<?php echo $row['Id']; ?>'>Delete</a></button>
                </td>
            </tr>
          <?php } ?>
      
    <?php }else{
    echo "<h2>No Record Found</h2>";
    }
    mysqli_close($conn);
    ?>
      </tbody>
    </table>
  </div>
  

 




<!------Footer---->

<section class="footer">
  <h4>About Us</h4>
  <p>The university has always been a research-led university, however, in recent times, it has shifted its focus towards quality output projects,<br> which the university believes to be beneficial academically and industrially.</p>
      <div class="icons">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-twitter-square" aria-hidden="true"></i>
          <i class="fa fa-google-plus-square" aria-hidden="true"></i>
      </div>
      <p>Made By <i class="fa fa-heart"></i></i> Rohit Lakha</p>

</section>








<!-------JavaScript for Toggle Menu-------->
<script>

var navLinks = document.getElementById("navLinks")
function showMenu(){
    navLinks.style.right="0";
}
function hideMenu(){
    navLinks.style.right="-200px";
}


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>