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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.2/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="course.html">COURSE</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="adminLogin.html">ADMIN</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()" ></i>
    </nav>
    <h1>REGISTERATION PAGE</h1>



</section>

<!-----REGISTERATION----->

<section class="h-100 bd-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="images/img4.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student registration form</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">



                            <form action="reg-insert.php" method="post">
                            <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m1" name="mname" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m1">Mother's name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n1" name="ftname" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Father's name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" name="addres" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Address</label>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="Female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio"  name="gender" id="maleGender"
                            value="Male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender"
                            value="Other" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
      
                          <select class="select" name="ste">
                            <option value=" invalid">State</option>
                            <option value="Punjab">Punjab</option>
                            <option value="OtherState">Other state</option>
                            
                          </select>
      
                        </div>
                        <div class="col-md-6 mb-4">
      
                          <select class="select" name="city">
                            <option value="City">City</option>
                            <option value="Jalandhar">Jalandhar</option>
                            <option value="Amritsar">Amritsar</option>
                            <option value="Patiala">Patiala</option>
                            <option value="Ludhiana">Ludhiana</option>
                            <option value="Mohali">Mohali</option>
                            <option value="Kapurthala">Kapurthala</option>
                            <option value="Hoshiarpur">Hoshiarpur</option>
                            <option value="Other City">Other City</option>
                          </select>
      
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="date" id="form3Example9" name="dob" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">DOB</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example90" name="pincode" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example90">Pincode</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example99" name="course" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example99">Course</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" name="emailid" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <button style="background-color: aquamarine;" type="button" name="submit" class="btn btn-warning btn-lg ms-2"><a href="index.html" style="text-decoration: none; color: black ;;">Back</a></button>
                        <input type="submit" class="btn btn-warning btn-lg ms-2" style="background-color: #f44336;;">
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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

    
</body>
</html>