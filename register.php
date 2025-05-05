<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="register.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="logo.png" rel="icon" type="icon/png" size="16x16" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div id="dotbox" class="dotbox">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <div class="content">

                <form id="form" action="registerfunction.php" method="POST" enctype="multipart/form-data">
                <div class="lg">
                        <div>
                            <img src="logo.png" width="80" height="80"/>
                        </div>
                        <h1><i>Register With Us</i></h1>
                </div>
                  
                  <div class="page">
        
                    <div class="form-group">
                      <label for="email">Enter Email :</label>
                      <input type="email" name="email" id="email" class="form-control" 
                      placeholder="Enter email"/>

                      <label for="password">Enter Password :</label>
                      <input type="password" name="password" id="password" class="form-control"
                      placeholder="Enter Password"/>
                      <div>
                        <input type="radio" name="newsletter" id="agree" class="form-check-input"
                        value="1" checked/><label for="agree" class="form-check-label">I agree to get newsletter.</label>
                        <br/>
                        <input type="radio" name="newsletter" id="noagree" class="form-check-input"
                        value="0" /><label for="noagree" class="form-check-label">I do not to get newsletter.</label>
                      </div>
                    </div>
                  </div>
        
                  <div class="page">
        
                    <div class="form-group">
                      <label for="firstname">Personal Info :</label>
                      <input type="text" name="firstname" id="firstname" class="form-control" 
                      placeholder="Enter First Name"/>
                      <input type="text" name="lastname" id="lastname" class="form-control"
                      placeholder="Enter Last Name"/>
                      <div>
                        <label for="profile">Profile Picture</label>
                        <input type="file" name="profile[]" id="profile"/>
                      </div>
                    </div>
                  </div>
        
                  <div class="page">
                    <div class="form-group">
                      <label for="dob">Date of Birth :</label>
                      <input type="date" name="dob" id="dob" class="form-control" />
                      <label for="rollno">Roll Number :</label>
                      <input type="text" name="rollno" id="rollno" class="form-control" placeholder="Enter Your Roll No"/>
                      <label for="dpm">Department :</label>
                      <input type="text" name="dpm" id="dpm" class="form-control" placeholder="Your Deparment"/>
                   
                    </div>
                  </div>
        
                  <div class="page">
                    <div class="form-group">
                      <label for="phone">Contact Info :</label>
        
                      <input type="text" name="phone" id="phone" class="form-control" 
                      placeholder="Enter Phone Number"/>
                      <input type="text" name="address" id="address" class="form-control"
                      placeholder="Enter Detail Address"/>
                      
                      <div>
                        <label>Your are:</label>
                        <input type="checkbox" name="student_types[]" id="cs"
                        class="form-check-input" value="cs"/><label 
                        for="cs" class="form-check-label">CS Student</label>
        
                        <input type="checkbox" name="student_types[]" id="nocs"
                        class="form-check-input" value="mu_student"/><label 
                        for="nocs" class="form-check-label">MU Student</label>
                      </div>
                    </div>
                  </div>
        
                  <!-- <div class="d-flex">
                    <button type="button" name="prevbtn" id="prevbtn" class="btn" onclick="gonow(-1)">Prevoius</button>
                    <button type="button" name="nextbtn" id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
                  </div> -->
        
                  <div class="d-flex">
                      <button type="button" id="prevbtn" class="btn" onclick="gonow(-1)">Previous</button>
                      <button type="button" id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
                  </div>
        
                  <p>Already Register ? <a href="login.php">Login Here!!!</a></p>
                </form>
        
              
                <div id="result-container">
        
                  <!-- <ul>
                    <li>Name : Aung Kyaw</li>
                    <li>Email : aungkyaw@gmail.com</li>
                  </ul>
        
                  <button type="submit" class="sunmit-btn" onclick="submit()">Apply Now</button> -->
        
                </div>
        
                
              </div>
        </div>
        <script src="public/webpage/js/auth.js" type="text/javascript"></script>
    </body>
</html>