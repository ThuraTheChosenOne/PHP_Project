<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <link href="./assets/img/logo.png" rel="icon" type="img/png" sizes="16x16">
    <link href="./assets/libs/fontawesomepro/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="./css/aboutus.css" rel="stylesheet">
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
            <h1>Achievement (2018 - Present)</h1>
            
            
        </div>
        
    </section>
       
        
<!-- ------Achievements------- -->

<section class="frame">
    <h2>2018-2019/2019-2020</h2>
    
    <div class="first row">
        <a href="#"><img src="./assets/img/img17.JPG"></a>
        <a href="#"><img src="./assets/img/img16.JPG"></a>
        
    </div>
    <div class="text txt1">
    <p><b>Trophies</b> of Badminton tournaments from 2018 to 2020.</p>
</div>
    <h2>2022-2023</h2>
<div class="second">
    
    <div class="pic">
  
    <a href="#"><img src="./assets/img/img8.jpg"></a>
    <a href="#"><img src="./assets/img/img9.jpg"></a>
    </div>

    <div class="trophy">
    
    <a href="#"><img src="./assets/img/img30.png"></a>
    <br/>
    <a href="#"><img src="./assets/img/img29.png"></a>
    </div> 
    </div>
    <div class="text txt2">

    <p><b>First</b> place in Mandalay University's Basketball and Badminton tournaments.</p>
</div>

   
</div>
    <h2>2024-2025</h2>
    <div class="third row">
    
        
        <img src="./assets/img/img14.JPG">
        <img src="./assets/img/img25.JPG">
     </div>
        
        <div class="row text txt3">
            <p id="chin">The <b>first place </b>in traditional Pite Kyaw Chin.</p>     
            <p id="volleyball">The <b>third place</b> in Mandalay University's volleyball tournament.</p>
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