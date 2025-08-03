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
   
        <h1>WELCOME TO ADMIN SIDE</h1>
        
        
    
</section>
<!---------course------->
<section class="course">
  <h1>Courses We Offer</h1>
  <p class="1">Here are some provided courses--</p>
  <div class="row">
      <div class="row">
          <div class="course-col">
              <h3> Diploma</h3>
              
              
                  <p class="dep"><i class="fa fa-pencil-square" aria-hidden="true" style="color: #f44336;"></i> Diploma in Computer Sci</p>
                  <p class="dep"><i class="fa fa-pencil-square" aria-hidden="true" style="color: #f44336;"></i> Diploma in Mechanical Eng</p>
                  <p class="dep"><i class="fa fa-pencil-square" aria-hidden="true" style="color: #f44336;"></i> Diploma in Fashion Design</p>
                  <p class="dep"><i class="fa fa-pencil-square" aria-hidden="true" style="color: #f44336;"></i> Diploma in Accounting</p>
                  <p class="dep"><i class="fa fa-pencil-square" aria-hidden="true" style="color: #f44336;"></i> Diploma in Cosmetology</p>
                  
                  
              
          </div>
          <div class="course-col">
              <h3>Graduation</h3>
              <p class="dep"><i class="fa fa-book" aria-hidden="true" style="color: #f44336;"></i> Bachelor of Arts</p>
              <p class="dep"><i class="fa fa-book" aria-hidden="true" style="color: #f44336;"></i> Bachelor of Computer Application</p>
              <p class="dep"><i class="fa fa-book" aria-hidden="true" style="color: #f44336;"></i> Bachelor Of Commerce</p>
              <p class="dep"><i class="fa fa-book" aria-hidden="true" style="color: #f44336;"></i> Bachelor of Business Administration</p>
              <p class="dep"><i class="fa fa-book" aria-hidden="true" style="color: #f44336;"></i> Hotel Management (BHMCT)</p>
          </div>
          <div class="course-col">
              <h3>Post Graduation</h3>
              <p> <i class="fa fa-hand-o-right" aria-hidden="true" style="color: #f44336;"></i> Master Of Computer Application, <i class="fa fa-hand-o-right" aria-hidden="true" style="color: #f44336;"></i>
                  Master Of Commerce, <i class="fa fa-hand-o-right" aria-hidden="true" style="color: #f44336;"></i>MA English, <i class="fa fa-hand-o-right" aria-hidden="true" style="color: #f44336;"></i>MA Punjabi,<br> 
                  <i class="fa fa-hand-o-right" aria-hidden="true" style="color: #f44336;"></i>Master of Business Administration</p>
          </div>
      </div>

</section>


<!-----Facilities------>

<section class="facilities">
  <h1>Our facilities</h1>
  <p class="1">Our Facilities For Students--</p>

<div class="row">
  <div class="facilities-col">
      <img src="images/library.png">
      <h3 style="text-align: center;">World Class library</h3>
      <p>Punjabi Novel,English Stories,Poetry,Comic Books</p>
  </div>
  <div class="facilities-col">
      <img src="images/basketball.png">
      <h3 style="text-align: center;"> Play Ground</h3>
      <p>Football,Badminton,Table-Tennis,Basketball,Swimming,Weightlifting</p>
  </div>
  <div class="facilities-col">
      <img src="images/cafeteria.png">
      <h3 style="text-align: center;">Tasty and Healthy Food</h3>
      <p>Snacks,Cakes and Pastries,Cheesy Pizza,Italian Noodles</p>
  </div>
</div>


</section>

<!-----testimonials------>

<section class="testimonials">
  <h1> What Our Student says</h1>
  
  <div class="row">
      <div class="testimonials-col">
          <img src="images/user1.jpg">
          <div>
              <p>The tweet did not sit well with many netizens at all, as they took to social media to berate the education department by calling them out for allegedly s*xualizing kids and not focusing enough on education.</p>
              <h3>Christine Berkley</h3>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
          </div>
      </div>
      <div class="testimonials-col">
          <img src="images/user2.jpg">
          <div>
              <p>We took Bibles out of schools to push gender ideology and promote sin on our children while actual education for things like reading and math sit on the back burner… and America is flipping the bill for it all!!!</p>
              <h3>David Byer</h3>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>