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
<section class="sub-header">
    <nav>
        <a href="index.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                
                <li><a href="index.html">LOGOUT</a></li>
            </ul></div>
        <i class="fa fa-bars" onclick="showMenu()" ></i>
    </nav>
    <h1>WELCOME HERE STUDENT</h1>

</section>


<div class="container mt-5 my-5">
    <center><h2 >Hye Student..!</h2></center>
    
<div id="main-content">
    <center><h2 style="background-color: #1abc9c; color: #fff;">Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group" >
            <label >Id</label>
            <input type="text" name="id" />
        </div><br>
        <input class="btn btn-success" type="submit" name="showbtn" value="Login" />
    </form></center>

    <?php
      if(isset($_POST['showbtn']))
        include 'connection.php';

        $stu_id = $_POST['id'];

        $sql = "SELECT * FROM reg WHERE id = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
      <table class="table table-bordered mt-3" style="text-align: center;">
      <thead>
        <tr>
          <th style="background-color: #333; color: #fff;">Id</th>
          <th style="background-color: #333; color: #fff;">First Name</th>
          <th style="background-color: #333; color: #fff;">Last Name</th>
          <th style="background-color: #333; color: #fff;">Mother's Name</th>
          <th style="background-color: #333; color: #fff;">Father's Name</th>
          <th style="background-color: #333; color: #fff;">Address</th>
          <th style="background-color: #333; color: #fff;">Gender</th>
          <th style="background-color: #333; color: #fff;">State</th>
          <th style="background-color: #333; color: #fff;">City</th>
          <th style="background-color: #333; color: #fff;">DOB</th>
          <th style="background-color: #333; color: #fff;">Pincode</th>
          <th style="background-color: #333; color: #fff;">Course</th>
          <th style="background-color: #333; color: #fff;">Email</th>
          <th style="background-color: #333; color: #fff;">Manage</th>
        </tr>
      
        
          
        <?php
        while($row = mysqli_fetch_assoc($result)){
      ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['ftname']; ?></td>
            <td><?php echo $row['addres']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['ste']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['emailid']; ?></td>
            <td>
            <button type="button" class="btn btn-success"><a style="text-decoration: none; color: white;" href='edit-reg-student.php?id=<?php echo $row['id']; ?>'>Edit</a>
                
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