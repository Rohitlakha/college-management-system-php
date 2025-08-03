<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()" ></i>
        </nav>
        <h1>LOGIN</h1>
    
    
    
    </section>
    
    <section class="vh-100"">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="images/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                    <form action="login-insert.php" method="post">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <h1 style="font-weight: bold; ">Eduford</h1><img src="images/logo.png">
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                        
                        <div class="form-outline mb-4">
                          <input type="text" id="form2Example17" name="username" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">User Name</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" name="pasword" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <input class="btn btn-dark btn-lg btn-block" type="button" ><a href="adminIndex.html"style="text-decoration: none;color:white;" value="Login"></a>
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
      <!----footer-->
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