<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Bank Safe Online</title>
    <link rel="stylesheet" href="./stylesheets/login.css">
</head>
<body>
    <form action="./php/login.php" method="POST">
        <div class="container" action="login-database.php" method="post">
            <div class="header">
                <p class="login-text">Login</p>
            </div>
                <div class="body">
                    <input type="email" name="email" placeholder="Email address" class="emailaddress" id="e-mail" required>
                    <input type="password" name="Password" placeholder="Password" class="password" id="_password" required>
                   </div>
                   <div class="text">
                       <input type="checkbox" class="rememberme" name="remember-me">
                       <span class="remember-me-text">Remember Me</span>
                       <a href="#forgotpassword" class="Forgot">Forgot password?</a>
                   </div>
                   <div class="btn">
                       <button name="submit" class="loginbtn" values="Login">Login</button>
                   </div>
                   <div class="footer">
                       <span class="dontpara">Don't have a account?</span>
                       <a href="signup.php" class="signup" target="_self">Sign Up</a>
                   </div>
            
        </div>
    </form>
   
</body>
</html>