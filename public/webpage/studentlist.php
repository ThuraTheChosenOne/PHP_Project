<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Computer Science</title>
        <link href="./css/studentlist.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="./assets/img/logo.png" rel="icon" type="image/png" sizes="16x16" />
        <link href="./assets/libs/fontawesomepro/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/libs/lightbox2-2.11.4/dist/css/lightbox.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        
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
                <h1>Third Year & First Year(Hons:)</h1>
                <h1>Student List - 2025 </h1>
                
            </div>
            
        </section>
        <!-- Start student list -->
        <div class="haha"> 
            <main class="table">
                <section class="tableheader">
                    <h1>Student List</h1>
                    <div class="input-group">
                        <input typr="search" placeholder="Search Student..."/>
                        <i class="fas fa-search"></i>
                    </div>
                </section>
                <section class="tablebody">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Roll No.</th>
                                <th>Year</th>
                                <th>Phone</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td><a href="assets/img/student1.jpg" data-lightbox="student" data-title="Thura Naing"><img src="assets/img/student1.jpg"/></a> Thura Naing</td>
                                <td><strong> 1HCS-1 </strong></td>
                                
                                <td>
                                    <p class="year hons">1st yr(Hons:)</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 2 </td>
                                <td><a href="assets/img/student2.jpg" data-lightbox="student" data-title="May Thet Khaing"><img src="assets/img/student2.jpg"/></a> May Thet Khaing</td>
                                <td><strong> 1HCS-2 </strong></td>
                            
                                <td>
                                    <p class="year hons">1st yr(Hons:)</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 3 </td>
                                <td><a href="assets/img/student3.jpg" data-lightbox="student" data-title="Hsu Lab Yadanar"><img src="assets/img/student3.jpg"/></a> Hsu Lab Yadanar</td>
                                <td><strong> 1HCS-3 </strong></td>
                            
                                <td>
                                    <p class="year hons">1st yr(Hons:)</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Shan </td>
                            </tr>
    
                            <tr>
                                <td> 4 </td>
                                <td><a href="assets/img/student4.jpg" data-lightbox="student" data-title="May Thu Thu Htun"><img src="assets/img/student4.jpg"/></a> May Thu Thu Htun</td>
                                <td><strong> 1HCS-4 </strong></td>
                            
                                <td>
                                    <p class="year hons">1st yr(Hons:)</p>
                                </td>
                                <td> +95 9761701701 </td>
                                <td> Pyin Oo Lwin </td>
                            </tr>
    
                            <tr>
                                <td> 5 </td>
                                <td><a href="assets/img/student5.jpg" data-lightbox="student" data-title="Thoon Yamone Linn"><img src="assets/img/student5.jpg"/></a> Thoon Yamone Lin</td>
                                <td><strong> 1HCS-5 </strong></td>
                            
                                <td>
                                    <p class="year hons">1st yr(Hons:)</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 6 </td>
                                <td><a href="assets/img/student6.jpg" data-lightbox="student" data-title="Hein Htun Zaw"><img src="assets/img/student6.jpg"/></a> Hein Htun Zaw</td>
                                <td><strong> 3CS-1 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Lasho </td>
                            </tr>
    
                            <tr>
                                <td> 7 </td>
                                <td><a href="assets/img/student7.jpg" data-lightbox="student" data-title="Zin Min Thant"><img src="assets/img/student7.jpg" alt="" /><a> Zin Min Thant</td>
                                <td><strong>  3CS-2 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 455026616 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 8 </td>
                                <td><a href="assets/img/student8.jpg" data-lightbox="student" data-title="Khin Shin Thant"><img src="assets/img/student8.jpg"/></a> Khin Shin Thant </td>
                                <td><strong>  3CS-3 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 9 </td>
                                <td><a href="assets/img/student9.jpg" data-lightbox="student" data-title="Hsu Wai Htet"><img src="assets/img/student9.jpg"/></a> Su Wai Htet</td>
                                <td><strong>  3CS-4 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 10 </td>
                                <td><a href="assets/img/student10.jpg" data-lightbox="student" data-title="Phoo Pwint Thu"><img src="assets/img/student10.jpg"/></a> Phoo Pwint Thu</td>
                                <td><strong>  3CS-5 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Mandalay </td>
                            </tr>
    
                            <tr>
                                <td> 11 </td>
                                <td><a href="assets/img/student11.jpg" data-lightbox="student" data-title="Kaung Set Win"><img src="assets/img/student11.jpg"/></a> Kaung Set Win</td>
                                <td><strong>  3CS-6 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 9791117528 </td>
                                <td> Pyin Oo Lwin </td>
                            </tr>
    
                            <tr>
                                <td> 12 </td>
                                <td><a href="assets/img/student12.jpg" data-lightbox="student" data-title="Thu Htun Lin"><img src="assets/img/student12.jpg" /></a> Thu Htun Linn</td>
                                <td><strong>  3CS-7 </strong></td>
                            
                                <td>
                                    <p class="year three">3rd Year</p>
                                </td>
                                <td> +95 752961680 </td>
                                <td> Mandalay </td>
                            </tr>
    
                        </tbody>
                    </table>
                </section>
            </main>
        </div> 
        
       
        <!-- End student list -->
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
      

        <script src="js/list.js" type="text/javascript"> </script>
        <script src="assets/libs/lightbox2-2.11.4/dist/js/lightbox-plus-jquery.js"></script>
        
    </body>
</html>