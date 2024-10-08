<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up/Register-Bank Safe Online</title>
    <link rel="stylesheet" href="./stylesheets/signup.css">
</head>
<body>
    <form action="./php/signup.php" method="POST">
        <div class="signup">
            <p class="text">Sign Up</p>
            <input type="text" name="name" id="email" placeholder="Name" class="Email" required>
            <br />
            <input type="email" name="Email" id="Email" placeholder="Email address" class="password" required>
            <br />
            <input type="password" name="Password" id="current-password" placeholder="Password" class="repassword" required>
            <br />
               <div class="wrapper">
                <input type="checkbox" name="rememberme" id="rememberme" class="Remember">
                <label for="rememberme" class="re-member">I've Read and agree to </label>
                <a href="terms&condition" class="condition">Terms & condition</a>
               </div>
               <br />
    
            <input type="submit" name="submit" id="Signup" value="Sign Up" class="Signupbtn">
            
           <div class="bottom">
            <p class="para">Already have a account?</p>
            <a href="login.php" class="logintext" target="_self">Login</a>
           </div>
        </div>
    </form>

</body>
</html>