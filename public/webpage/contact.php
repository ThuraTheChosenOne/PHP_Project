<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Computer Science</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
 <link rel="stylesheet" href="./css/contact.css">
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
                
            </div>
            
        </section>
           
        <!-- End Header --> 
        <div class="zmt">
            <div class="contact">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14801.668220256664!2d96.08404375357544!3d21.956951078955743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6ddafbc34be9%3A0x61a78d782e6897f8!2sUniversity%20of%20Mandalay!5e0!3m2!1sen!2smm!4v1740804680506!5m2!1sen!2smm" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
                </div>
                <div class="form">
                    <h1>Contact Us</h1>
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="19f86b6c-11ca-4df9-bc93-d150d381cd70">
                        <input type="text" name="name" required placeholder="Name">
                        <input type="email"name="email" required placeholder="Email">
                        <input type="text" name="subject" required placeholder="Subject">
                        <textarea placeholder="Message"name="msg" required></textarea> 
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    

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

</body>
</html>