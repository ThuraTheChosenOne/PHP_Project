<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Computer Science</title>
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="./assets/img/logo.png" rel="icon" type="image/png" sizes="16x16" />
        <link href="./assets/libs/fontawesomepro/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
       <!-- Start Header -->
       
        <section class="sub-header">
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
                                    <li><a href="achivement.php"><span>Achievement</span></a></li>
                                        <li><a href="about.php"><span>About Us</span></a></li>
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
               <h1>News & Activities<br/>in 2025</h1>
            </div>
            
        </section>
           
        <!-- End Header --> 
        <!-- Blog Page Content -->
        <section class="blog-content">
            <div class="row">
                <div class="blog-left">
                    <div class="slider">
                        <div class="wrapper">
                            <img class="slide" src="assets/img/slide4.jpg" alt=""/>
                            <img class="slide" src="assets/img/slide2.jpg" alt=""/>
                            <img class="slide" src="assets/img/slide3.jpg" alt=""/>
                            <img class="slide" src="assets/img/slide5.jpg" alt=""/>
                            <img class="slide" src="assets/img/slide1.jpg" alt=""/>
                            <img class="slide" src="assets/img/slide6.jpg" alt=""/>
                                            

                        </div>
                    </div>

                    <h2>🎉 Fresher Welcome 2024 – Mandalay University Computer Science Major 🎉</h2>
                    <p>The Computer Science Department at Mandalay University recently hosted an exciting Fresher’s Welcome, 
                        marking the beginning of a new academic journey for incoming students. This event aimed to introduce 
                        freshers to university life, faculty members, and the opportunities awaiting them in the tech world.
                    </p>
                    <br/>
                    <p>During the welcome, students got insights into their course structure, met senior students for mentorship,
                         and explored tech clubs, coding workshops, and hackathons. The event also emphasized networking, encouraging 
                         freshers to engage in campus activities and career-building opportunities in software development, AI, and 
                         cybersecurity.
                    </p>
                    <br/>
                    <p>
                    With modern facilities, expert faculty, and a thriving tech community, Mandalay University ensures that Computer 
                    Science students receive top-notch education. This fresher welcome was just the start of an exciting journey toward
                     innovation and success.
                    </p>
                    
                    <div class="comment-box">
                        <h3>Leave a comment</h3>

                        <!-- <form action="../../mail.php" class="comment-form">
                            <form action="mail.php" method="post">
                                <input type="text"  name="name" id="" placeholder="Full Name:"/>
                                <input type="email" name="email" id="" placeholder="Enter Email:"/>
                                <input type="text" name="subject" id="" placeholder="Enter Subject:"/>
                                <textarea class="form-control mt-4" name="message" id="" cols="30" rows="10" placeholder="Enter Message:"></textarea>
                            <button type="submit" class="hero-btn">Post comment</button>
                        </form> -->

                        <form action="../../mail.php" method="POST" class="comment-form">
                            <input type="text"  name="fullname" placeholder="Full Name:"/>
                            <input type="email"  name="email" placeholder="Enter Email:"/>
                            <input type="text" name="subject" placeholder="Enter Subject:"/>
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter Message:"></textarea>
                            <button type="submit" class="hero-btn">Post comment</button>
                        </form>
                    </div>
                </div>
                <div class="blog-right">
                    <h3>Computer Science Student List-2025</h3>
                    <div>
                        <span>1st Year(SemI)</span>
                        <span>12</span>
                    </div>
                    <div>
                        <span>2nd Year(SemII)</span>
                        <span>7</span>
                    </div>
                    <div>
                        <span>3rd Year & 1st Year(Hons:)(SemI)</span>
                        <span>10</span>
                    </div>
                    <div>
                        <span>3rd Year & 1st Year(Hons:)(SemII)</span>
                        <span>12</span>
                    </div>
                    <div>
                        <span>4th Year & 2nd Year(Hons:)(SemII)</span>
                        <span>15</span>
                    </div>
                    <div>
                        <span>Qualify & 3rd Year(Hons:)(SemII)</span>
                        <span>8</span>
                    </div>
                    <div>
                        <span>1st Year MSC.</span>
                        <span>8</span>
                    </div>
                    <div>
                        <span>2nd Year MSC.</span>
                        <span>8</span>
                    </div>
                    <h3>Total Student - 67</h3>
                </div>
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
                <i class="fab fa-telegram"></i>
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