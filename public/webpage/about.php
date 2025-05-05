<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link href="./css/aboutus.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="./assets/img/logo.png" rel="icon" type="image/png" sizes="16x16" />
        <!-- Font awsome pro -->
        <link href="./assets/libs/fontawesomepro/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>  
 <!-- Start Header -->
       
    <section class="hero">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="logo" width="180" height="180">
                </div>

                <!-- Start Nav -->
                    <nav class="menu">
                        <div class="head">
                            <div class="logo"><img src="assets/img/logo.png" alt="logo" width="100" height="100"></div>
                            <button type="button" class="close-menu-btn"></button>
                        </div>

                        <ul>

                            <li><a href="index.php">Home</a></li>

                            <li class="dropdown">
                                <a href="#">About</a>
                                <i class="far fa-chevron-down"></i>
                                <ul class="sub-menu">
                                <li><a href="about.php"><span>About Us</span></a></li>
                                <li><a href="achivement.php"><span>Achievement</span></a></li>
                                   
                                    <li><a href="studentlist.php"><span>Student List</span></a></li>
                                </ul>
                                
                            </li>

                            <li><a href="course.php">Course</a></li>

                            <li><a href="blog.php">Blog</a></li>

                            <li><a href="contact.php">Contact</a></li>

                            <?php if(isset($_SESSION['email'])):?>
                                            <li><a href="../../logout.php">Logout</a></li>
                                        <?php else:?>
                                            <li><a href="../../login.php">Login</a></li>
                                     
                                            <li><a href="../../register.php">Register</a></li> 
                            <?php endif;?>

                        </ul>

                    </nav>
                <!-- End Nav -->
                <div class="header-right">
                    <button type="button" class="search-btn icon-btn"><i class="fas fa-search"></i></button>
                    
                    <button type="button" class="open-menu-btn">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="text-box">
            <h1>About Us</h1>
            
            
        </div>
        
    </section>
  <!-- ---about us content--- -->
  <section class="about-us">
    <div class="row">
     <div class="about-col">
        <div class="text">
        <h1>What We Are</h1>
        <p>We offer the most appropriate concepts to those who are interested in IT.
         People whos specialize in this department will get an excess amount of job opportunities
             not only in local field but also can get job offers from abroad.
         </p>

         <h1>Who you are likely to become?</h1>
         <ul>
             <li>Software Engineer</li>
             <li>Software Developer</li>
             <li>Project Manager</li>
             <li>Web Developer and so on.</li>
            
         </ul>
        </div>
     </div>
     <div class="about-col">
         <img src="./assets/img/imgposter.jpg">
     </div>
     
    </div> 
    
    
    <div class="facilities">
        
         <h1>Department Library</h1>
         <i class="fas fa-book-open"></i> 
         
         <p>A place where we can read a bunch of interesting books including SE ralated books and other kinds of books as well. Not only that we can use
             the Ebooks library which is more convenient for the students nowadays.</p>
             <div class="row">
             <img src="./assets/img/img11.JPG">
             <img src="./assets/img/img12.JPG">
    
    </div>
</div>
    <div class="achievements">
        
         <h1 style="text-align: center; ">Achievements</h1>
        <h4>2024-2025(Previous Achievements)</h4>
        <div class="row">
        
            <img src="./assets/img/img14.JPG">
            <p>The <b>first place </b>in traditional Pite Kyaw Chin.</p>
             

            <div class="row">
                <img src="./assets/img/img25.JPG"> </div>
                <p>The <b>third place</b> in Mandalay University's volleyball tournament.</p>
             
            </div>

         <center><a href="achivement.php"><button class="explore">Explore</button></a></center>
    </div>
   
 </section>   

 <!------ Profile card ----->

 <section class="profilecard about-us">
    <div>
        <img src="./assets/img/imgtrn.JPG">
        <h1>Thura Naing</h1>
        <p>First Year Honours Student<br>CS Department, MU</p>

        <i class="fa fa-phone"></i>
        <a href="">09-695016683</a><br>

        <i class="fa fa-envelope"></i>
        <a href="mailto:thuranaing5779@gmail.com">thuranaing@gmail.com</a>

     </div>
    
     <div>
        <img src="./assets/img/imghsu.JPG">
        <h1>Hsu Lab Yadanar</h1>
        <p>First Year Honours Student<br>CS Department, MU</p>

        <i class="fa fa-phone"></i>
        <a href="">09-759499488</a><br>

        <i class="fa fa-envelope"></i>
        <a href="mailto:hsulabyadanar03@gmail.com">hsulabydn@gmail.com</a>
     </div>

     <div>
        <img src="./assets/img/imgzmt.JPG">
        <h1>Zin Min Thant</h1>
        <p>Third Year Student<br>CS Department, MU</p>
        
        <i class="fa fa-phone"></i>
        <a href="">09-455026616</a><br>
        
        <i class="fa fa-envelope"></i>
       <a href="mailtominthant20819@gmail.com">zinmin@gmail.com</a>
     </div>

     <div>
        <img src="./assets/img/imgmay.JPG">
        <h1>May Thu Thu Tun</h1>
        <p>First Year Honours Student<br>CS Department, MU</p>

        <i class="fa fa-phone"></i>
        <a href="">09-761701701</a><br>
        
        <i class="fa fa-envelope"></i>
        <a href="mailto:maythuthu1614@gmail.com">maythuthu@gmail.com</a>
     </div>
 </section>


<!-- Start Footer -->
<section class="footer">

    <h4>About Us</h4>
    <p>A group of friends collaborated to create this webpage,<br> combining our skills and passion for innovation.</p>
    <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <a href="https://t.me/+MALco1QlWCAzMjY1"><i class="fab fa-telegram"></i></a>
    </div>
    
    <p class="heart">Made with <i class="fas fa-heart"></i> By GROUP(3)</p>

    
    <div class="cr">
        <p>&copy; <span id="getyear">2000</span> Copyright. All Rights Reserved.</p>
    </div>
    
</section>
  <!-- End Footer -->

 <script src="js/app.js" type="text/javascript"> </script>
</body>
</html>