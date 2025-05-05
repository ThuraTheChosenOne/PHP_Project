<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Computer Science</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="assets/img/logo.png" rel="icon" type="image/png" sizes="16x16" />
        <link href="assets/libs/fontawesomepro/css/all.min.css" rel="stylesheet" type="text/css"/>
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
                                    <li><a href="about.php"><span>About Us</span></a></li>
                                    <li><a href="achivement.php"><span>Achievement</span></a></li>
                                        
                                        <li><a href="studentlist.php"><span>Student List</span></a></li>
                                    </ul>
                                    
                                </li>
        
                                <li>
                                    <a href="course.php">Course</a>
                                                                      
        
                                </li>
        
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
                <h1>What we can learn in computer science department</h1><br><br>
               
            </div>
            
        </section>
           
        <!-- End Header --> 

       

       <!-- Start Course -->

       <section class="aim">
        <h1>Courses We Offer</h1>
        <p>We are offering the following courses in our Computer Science Department</p>

        <div class="row">
            <div class="course-col">
                <h3> Intermediate</h3>
		<h5>(First Year,Second Year)</h5>
                <p>In our department, intermediate level students will learn C++ and Java, two programming languages helping students build a strong foundation for software development. Both languages teach important concepts like object-oriented programming, data structures, and algorithms. </p>
            </div>

	

            <div class="course-col">
                <h3> Degree</h3>
                <p>As a computer science student, mastering key technologies like C#, web development, and PHP will equip you with essential programming skills for modern software development. By understanding these core areas, you'll be prepared for diverse career opportunities in software development, web engineering, and beyond.</p>
            </div>

            <div class="course-col">
                <h3> Post Graduation</h3>
                <p>As a postgraduate Computer Science student, you have the opportunity to deepen your expertise through specialized courses in Networking, Artificial Intelligence (AI), and Python programming. These courses provide a strong foundation for research and industry applications, preparing you for cutting-edge technological advancements.</p>
            </div>
        </div>


	<div class="Courses">

        <div class="Intermediate">

            <h3>Intermediate</h3>
            

            <img src="./assets/img/database.jpg">
            <p><b>Database</b></br>
            Database is an organized collection of data based on the use of a Database Management System (DBMS),the software that interacts with end users,and the database itself to capture and analyze the data.

            <div class="LearnMore"><a href="https://www.w3schools.in/dbms/database" class="hero-btn"> Learn More</a></div></p>


            <img src="./assets/img/C++.png">
            <p><b>C++</b></br>
            C++ is an object-oriented programming (OOP) language that is viewed by many as the best language for creating system software, game development,embedded systems, scientific computing and high-performance applications.

            <div class="LearnMore"><a href="https://www.geeksforgeeks.org/c-plus-plus/" class="hero-btn"> Learn More</a></div></p>


            <img src="./assets/img/Java.png">
            <p><b>Java</b></br>
            Java is a high-level, class-based, object-oriented programming language that’s widely used for web apps, mobile apps, and enterprise applications. It runs on any platform with a Java Virtual Machine (JVM),making it"write once, run anywhere."

            <div class="LearnMore"><a href="https://www.w3schools.com/java/java_intro.asp" class="hero-btn"> Learn More</a></div></p>

        </div>
            
        <div class="Degree">
            <h3>Degree</h3>
            <img src="./assets/img/CSharp.png">
            <p><b>C#</b></br>
            C# is an object-oriented programming language that is part of the .NET ecosystem,developed by Microsoft for building a wide range of applications, including web, desktop, and mobile apps, as well as games. 
            <div class="LearnMore"> <a href="https://en.m.wikipedia.org/wiki/C_Sharp_(programming_language)" class="hero-btn"> Learn More</a></div></p>

            <img src="./assets/img/web.png">
            <p><b>Web</b></br>
            The web (World Wide Web) is a system of interlinked documents and multimedia content, accessed via the internet using web browsers. It allows users to browse websites, view information, and interact with online services.
            <div class="LearnMore"><a href="https://en.m.wikipedia.org/wiki/World_Wide_Web" class="hero-btn"> Learn More</a></div></p>

            <img src="./assets/img/php.png">
            <p><b>PHP</b></br>
            PHP is a server-side scripting language that’s an open-source, easy to use, and widely supported by web hosting services and used for web development commonly embedded within HTML to create dynamic web pages and applications.
            <div class="LearnMore"><a href="https://www.codewithharry.com/tutorial/php/" class="hero-btn"> Learn More</a></div></p>

            </div>

        <div class="PostGrad">
            <h3>Post Graduation</h3>


            <img src="./assets/img/Python.png">
            <p><b>Python</b></br>
            Python is a  general-purpose computer programming language often used to build websites and software, automate tasks, and analyze data, not specialized for any specific problems, and used to create various programs.
            <div class="LearnMore"><a href="https://www.w3schools.com/python/python_intro.asp" class="hero-btn"> Learn More</a></div></p>



            <img src="./assets/img/Networking.png">
            <p><b>Networking</b></br>
            Networking is the practice of connecting computers and other devices such as files, printers, or internet access, over a local area network (LAN) or wide area network (WAN) that can exchange data and share resources with each other.

            <div class="LearnMore"><a href="https://www.geeksforgeeks.org/basics-computer-networking/" class="hero-btn"> Learn More</a></div></p>
                


            <img src="./assets/img/AI.png">
            <p><b>AI</b></br>
            AI (Artificial Intelligence) is the simulation of human intelligence in machines, enabling them to perform tasks such as learning, problem-solving, and decision-making.  AI focuses on building systems that automate and speed time to decisions.
            <div class="LearnMore"><a href="https://www.w3schools.com/ai/ai_whatis.asp" class="hero-btn"> Learn More</a></div></p>


            </div>
	</div>

        </section>
       <!-- End Course -->

       
         <!-- Start Footer -->
        <section class="footer">

            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.
            Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s</p>
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