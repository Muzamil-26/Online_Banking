<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us-Bank Safe Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="./stylesheets/Navbar.css">
    <link rel="stylesheet" href="./stylesheets/Footer.css">
    <link rel="stylesheet" href="./stylesheets/contactus.css">

</head>
<body>
<div id="main">
    <!-- <div class="header">
        <header class="header-content">
            <a href="index.php" class="anchor" target="_parent">
                <img src="./assets/logo.webp" alt="logo" class="logo" width="50px">
                <div class="text">
                    <p class="logo-text1">Bank Safe</p>
                    <p class="logo-text2">Online</p>
                </div>
            </a>
            <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="Aboutus.php">About us</a>
                <a href="viewall.php">Awareness Topics</a>
                <a href="awarenessvideos.php">Awareness Videos</a>
                <a href="Contactus.php">Contact us</a>
            </nav>
            <div class="btn">
                <a href="login.php" target="_blank"><button class="Loginbtn">Login</button></a>
                <a href="signup.php" target="_blank"><button class="signupbtn">Sign Up</button></a>
            </div>

        </header>
    </div> -->
<?php
    include("./php/Navbar.php")

?>
    <main>
        <div class="header1">
            <div class="content">
                <div class="left">
                    <div class="textsendmesg">
                        <div class="texts">
                            <span class="send-text">Send Message</span>
                            <img src="./assets/email.png" alt="Email-icon">
                        </div>
                    </div>
    
                    <form action="">
                        <div class="mainbody">
                            <div class="names">
                                <div class="fname-text">
                                    <label for="Fname" class="firstname.text">First Name*</label>
                                    <br />
                                    <input type="text" name="Fname" id="firstname">
                                </div>
                                <div class="lname-text">
                                    <label for="lname">Last Name*</label>
                                    <br />
                                    <input type="text" name="lastname" id="lname">
                                </div>
                            </div>
                            <div class="flexxx">
                                <div class="flexphoneemail">
                                    <div class="email-text">
                                        <label for="Email">Email*</label>
                                        <br />
                                        <input type="email" name="email" id="Email">
                                    </div>
                                    <div class="phoneno">
                                        <label for="Email">Phone Number*</label>
                                        <br />
                                        <input type="tel" name="phoneno" id="Phonenumber">
                                    </div>
                                </div>
                            </div>
                            <div class="helpcontainer">
                                <label for="Message" class="help">What Can We Help You with?</label>
        
                                <textarea name="Message" id="Message" cols="30" rows="6" placeholder=" How can i help you...."
                                    class="textarea-text" style="resize: none;"></textarea>
                            </div>
        
                            <div class="btn">
                                <div class="btun">
                                    <input type="submit" name="Sumbit" id="Sumbit">
                                    <img src="./assets/download.jpg" alt="sendsvg">
                                </div>
                            </div>
                        </div>
                    </form>
    
    
                </div>
                <div class="right1">
                    <div class="text-email">
                        <span>Contact Information</span>
                    </div>
                    <div class="center">
                        <div class="flex">
                            <div class="svg">
                                <img src="./assets/email.png" alt="emailsvg">
                            </div>
                            <p class="paraemailclass">muzamilkhan.26.10thc@gmail.com</p>
                        </div>
                    </div>
    
                </div>
            </div>
    
        </div>
    </main>


    <footer>
        <div class="footer">
            <div class="footerinner">
                <div class="left-foooter">
                    <img src="./assets/logo.webp" alt="24sevensecuritylogo" width="50px" style="border-radius: 50%;">
                    <p class="flex-text1">Bank safe</p>
                    <p class="flex-text2">Online</p>
                    <p class="flex-text3">Be Aware Of Scams.</p>

                </div>
                <div class="middle1-footer">
                    <p id="footertexts1">Menu</p>
                    <a href="index.php" class="anchorhome">Home</a>
                    <a href="Aboutus.php" class="anchorfeatures">About us</a>
                    <a href="viewall.php" class="anchorsafety">Awareness Topics</a>
                    <a href="awarenessvideos.php" class="anchorblogs">Awareness Videos</a>
                    <a href="Contactus.php" class="anchorcontact">contact us</a>

                </div>
                <div class="middle2-footer">
                    <p id="footertexts2">Services</p>
                    <a href="#terms&condition" id="anchortermscondition">Terms&Condition</a>
                    <a href="#privacypolicy" id="anchorprivacypolicy">Privacy Policy</a>
                </div>
                <div class="last-footer">
                    <p class="getintouchtexts">Get In Touch</p>
                    <a href="#gmail">
                        <p class="emailtextsfooter">muzamilkhan.26.10thc@gmail.com</p>
                    </a>
                </div>
            </div>
            <div class="footerline">
                <hr>
            </div>

        </div>
        <div class="copyright">
            <p>Copy &copy; 2023 Sorting Bank Safe Online Pvt Ltd.All Rights Rerserved.</p>
        </div>

    </footer>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>   
<script>
const locoScroll = new LocomotiveScroll({
  el: document.querySelector("#main"),
  smooth: true
});
</script>
</body>
</html>