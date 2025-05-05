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
        <!-- logo icon -->
        <link href="./assets/img/logo.png" rel="icon" type="image/png" sizes="16x16" />
        <!-- fontawesomepro -->
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
                <h1>Computer Science</h1>
                <h1>Department</h1>
                <p>"From Binary Beginnings to Infinite Possibilities: Advancing the World Through Algorithms, Data, and Innovation 
                    <br>– The Heartbeat of Computer Science."</p>
                <a href="about.php" class="hero-btn">Visit Us To More</a>
            </div>
            
        </section>
           
        <!-- End Header --> 

       

       <!-- Start Course -->

       <section class="aim">
        <h1>Building Futures Together</h1>
        <p>"Your Journey Starts Here: Programs Rooted in Vision and Values"</p>

        <div class="row">
            <div class="course-col">
                <h3><i class="far fa-bullseye-arrow"></i> Mission</h3>
                <p>To provide high-quality education, innovative research,
                     and industry collaboration, equipping students with the skills 
                     to solve real-world computing challenges.</p>
            </div>

            <div class="course-col">
                <h3><i class="far fa-eye"></i> Vision</h3>
                <p>To be a leading center in computer science education 
                    and research, driving technological advancements and societal progress.</p>
            </div>

            <div class="course-col">
                <h3><i class="fas fa-lightbulb-on"></i> Values</h3>
                <p>We strive to encourage creativity and new ideas for the highest standards all the 
                    while upholding ethics and responsibility.Teamwork and partnerships are encouraged 
                     to foster diversity and equal opportunities.Continuous growth and adaptability are supported tremendously.</p>
            </div>
        </div>
   </section>
       <!-- End Course -->

       <!-- Start Campus -->

       <section class="campus">

            <h1>Our Recent Activities</h1>
            <p>Events and activities we celebrate during 2023 to 2025</p>

            <div class="row">
                <div class="campu-col">
                    <img src="./assets/img/a.jpg"/>
                    <div class="layer">
                        <h3>Homage Paying Ceremony 2023-2024</h3>
                    </div>
                </div>

                <div class="campu-col">
                    <img src="./assets/img/b.jpg"/>
                    <div class="layer">
                    <h3>Vollyball Third Place 2024-2025</h3>
                    
                    </div>
                </div>

                <div class="campu-col">
                    <img src="./assets/img/c.jpg"/>
                    <div class="layer">
                        <h3>Fresher Welcome 2024-2025</h3>
                    </div>
                </div>
               
            </div>


       </section>

       <!-- End Campus -->

       <!-- Start Facilities -->
       <section class="facilities">
            <h1>Our Facilities</h1>
            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>


            <div class="row">
                <div class="facilities-col">
                    <img src="./assets/img/library.jpg">
                    <h3>Our Department Library</h3>
                    <p style="text-align: left; " >The Computer Science Department Library provides a 
                    rich collection of books, journals, and digital resources on programming, AI, and cybersecurity. With modern 
                    study spaces and online databases, it supports students and researchers in academic learning and innovation.
                   </p>
                </div>

                <div class="facilities-col">
                    <img src="./assets/img/pratical.jpg">
                    <h3>Our Pratical Room</h3>
                    <p style="text-align: left; " >Our Practical Room is a hub for hands-on learning, equipped with modern computers and tools. 
                        It’s where students apply theory to real-world projects, 
                        from coding to software development, fostering innovation and technical skills in a collaborative environment.</p>
                </div>

                <div class="facilities-col">
                    <img src="./assets/img/class.jpg">
                    <h3>Our Lectur Room</h3>
                    <p style="text-align: left; " >
                    The lecture room is a bright and spacious classroom with rows of desks and 
                    chairs facing a central whiteboard or podium. It is equipped with a projector,
                     and large windows provide plenty of natural light. The room is designed to create a
                      comfortable and focused environment for lectures and discussions.
                    </p>
                </div>
            </div>
       </section>
       <!-- End Facilities -->

       <!-- Strat Testimonial -->
       <section class="testimonial">
            <h1>What Our Student Says</h1>
            <p>What people think of our department</p>

            <div class="row">
                <div class="testimoial-col">
                    <img src="./assets/img/user1.jpg"/>
                    <div>
                        <p>The Computer Science major gave us a solid foundation
                            in coding and software development.
                        </p>
                        <h3>Thura Htun(1HIC-1)</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="testimoial-col">
                    <img src="./assets/img/user2.jpg"/>
                    <div>
                        <p>
                            I love how this program covered cutting edge toppics like artificial intelligence and machine learning.
                        </p>
                        <h3>Pyae Kaung Shan(3Chem-2)</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                    </div>
                </div>

                
            </div>

            <div class="row">
                <div class="testimoial-col">
                    <img src="./assets/img/user1.jpg"/>
                    <div>
                        <p>I took a few Computer Science courses as electives,and I was really impressed by how pratical and in-demand the skillls are.
                        </p>
                        <h3>Win Kyaw Htun(3MB-1)</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="testimoial-col">
                    <img src="./assets/img/user1.jpg"/>
                    <div>
                        <p>Theer is a lot of overlap between engineering and CS especially in problem-solving and logic.
                        </p>
                        <h3>Kyaw Ye thwin(H1PSY-1)</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                       
                    </div>
                </div>

                
            </div>

       </section>
        <!-- End Testimonial -->

        <!-- Start Call To Action -->
        <section class="cta">
            <h1>Enroll for our various online courses<br>anywhere form the world</h1>
            <a href="contact.php" class="hero-btn">CONTACT US</a>
        </section>
         <!-- End Call To Action -->

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