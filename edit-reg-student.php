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
            </ul></div>
        <i class="fa fa-bars" onclick="showMenu()" ></i>
    </nav>
    
        <h1>UPDATE STUDENT DETAILS</h1>
        
        
    
</section>

<section class="vh-156" style="background-color: #cccc;">

    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-9 mt-5">
  
          <!-- <h1 class="text-white mb-4">UPDATE STUDENT DETAILS</h1> -->

          <?php
    include 'connection.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM reg WHERE id = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
  <form action="update-student-data.php" method="post">
  
          <div class="card" style="border-radius: 15px; ">
            <div class="card-body">
  
              <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">First Name</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="hidden" name="id" class="form-control form-control-lg" value="<?php echo $row['id']; ?>" />
                  <input type="text" name="fname" class="form-control form-control-lg" value="<?php echo $row['fname']; ?>" />
                  



  
                </div>
              </div>
  
              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Last Name</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="lname" class="form-control form-control-lg" value="<?php echo $row['lname']; ?>" / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Mother's Name</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="mname" class="form-control form-control-lg" value="<?php echo $row['mname']; ?>" / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Father's Name</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text " name="ftname" class="form-control form-control-lg" value="<?php echo $row['ftname']; ?>" / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Address</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="addres" class="form-control form-control-lg" value="<?php echo $row['addres']; ?>"  / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Gender</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="gender" class="form-control form-control-lg" value="<?php echo $row['gender']; ?>"  / required>
  
                </div>
              </div>
              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">State</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="ste" class="form-control form-control-lg" value="<?php echo $row['ste']; ?>"  / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">City</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="city" class="form-control form-control-lg" value="<?php echo $row['city']; ?>"  / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">DOB</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="date" name="dob" class="form-control form-control-lg" value="<?php echo $row['dob']; ?>"  / required>
  
                </div>
              </div>

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Pincode</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="pincode" class="form-control form-control-lg" value="<?php echo $row['pincode']; ?>" / required>
  
                </div>
              </div>

              

              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Course</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="text" name="course" class="form-control form-control-lg" class="form-control form-control-lg" value="<?php echo $row['course']; ?>" / required>
  
                </div>
              </div>

              
              <!-- <hr class="mx-n3">-->
              <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
  
                  <h6 class="mb-0">Email</h6>
  
                </div>
                <div class="col-md-9 pe-5">
  
                  <input type="email" name="emailid" class="form-control form-control-lg" value="<?php echo $row['emailid']; ?>" / required>
  
                </div>
              </div>
  
    
  
              <div class="px-5 py-4">
                <input type="submit" class="btn btn-primary btn-lg"  value="Update" >
              </div>
             
<?php
      }
    }
    ?>
  
            </div>
          </div>
  
        </div>
      </div>
    </div>
    </form>
  </section>
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