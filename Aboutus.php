<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us-Bank Safe Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="./stylesheets/Navbar.css">
    <link rel="stylesheet" href="./stylesheets/Footer.css">
    <link rel="stylesheet" href="./stylesheets/About-style.css">
</head>

<body>
    <div id="main">

    <?php
    include("./php/Navbar.php")

?>
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
                    <a href="Aboutus.php" target="_blank">About us</a>
                    <a href="viewall.php">Awareness Topics</a>
                    <a href="awarenessvideos.php">Awareness Videos</a>
                    <a href="Contactus.php" target="_blank">Contact us</a>
                </nav>
                <div class="btn">
                    <a href="login.php" target="_blank"><button class="Loginbtn">Login</button></a>
                    <a href="signup.php" target="_blank"><button class="signupbtn">Sign Up</button></a>
                </div>
    
            </header>
        </div> -->
    
        <main>
            <section class="aboutussection">
                <div class="aboutsectioninner">
                    <div class="aboutheading-section-big">
                        <h1>About Us</h1>
                    </div>
                    <div class="aboutus">
                        <div class="left-about">
                            <p>Welcome to Bank Safe Online, your trusted resource for navigating the world of online banking
                                securely and with confidence. Our mission is to help individuals and businesses protect
                                themselves from the growing threats of fraud, cyberattacks, and financial risks in the
                                digital
                                banking environment.
                            </p>
                            <p>
                                We are committed to providing up-to-date information, practical tips, and expert advice on
                                how
                                to stay safe online. Whether you're managing personal finances or overseeing corporate
                                accounts,
                                our goal is to empower you with the knowledge and tools needed to safeguard your assets and
                                prevent potential fraud.
                            </p>
                            <p>
                                At Bank Safe Online, we understand that security in online banking is more important than
                                ever. That's why we focus on delivering content that helps our community stay informed about
                                the latest scams, security threats, and best practices in cybersecurity. We believe that by
                                spreading awareness and promoting precautionary measures, we can contribute to a safer
                                online banking experience for everyone.
                            </p>
                            <p>
                                Join us in our mission to make online banking a safer place for all. Stay informed, stay
                                secure, and bank with peace of mind.
                            </p>
                        </div>
                        <div class="right-about">
                            <img src="./assets/vecteezy_mobile-banking-modern-flat-concept-for-web-banner-design_5877695-removebg-preview.png"
                                alt="About-image">
                        </div>
                    </div>
                </div>
            </section>
    
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
    <!-- <script src="./Javascripts/SmoothScroller.js"></script> -->
    <script src="./Javascripts/Aboutus.js"></script>
    <script>
        const locoScroll = new LocomotiveScroll({
          el: document.querySelector("#main"),
          smooth: true
        });
    </script>
</body>

</html>