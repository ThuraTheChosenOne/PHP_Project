<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link href="login.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="logo.png" rel="icon" type="icon/png" size="16x16" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="container">

            <div id="dotbox" class="dotbox">
            <span class="dot"></span>
            </div>

            <div>
           
            <form id="form" action="loginfunction.php" method="POST">
                <div class="lg">
                        <div>
                            <img src="logo.png" width="80" height="80"/>
                        </div>
                        <h1><i>Login With Us</i></h1>
                </div>
              
                <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"/>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password"/>
                </div>
                <div class="lg">
                    <div><input type="checkbox" class="form-check-input"/>
                        <label class="form-check-label">Remember Me</label>
                    </div>
                    
                    <div><a>Forgot password ? </a></div>
                </div>
                <div class="d-flex">
                <button type="submit" name="submit" id="submit" class="btn">Login</button>
                </div>
                <p>You don't have an account ? <a href="register.php">Register Here!!!</a></p>
            </form>
            
            </div>

    </div>

    </body>
</html>