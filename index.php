<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" ng-app="myapp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-Bank Safe Online</title>
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
    <link rel="stylesheet" href="./stylesheets/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <script src="./Javascripts/fetchapi.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
    
</head>
<body>

<?php
    if(!isset($_SESSION['username'])){
        $_SESSION['username']='';
        
    }

?>

    <div class="loader">
        <span class="classpan">Be</span>
        <span class="classpan">Aware</span>
        <span class="classpan">Of</span>
        <span class="classpan">Scams.</span>
    </div>

<!-- <div class="scroller"></div> -->
    <div id="main" ng-controller="myctrl">
        
    
        <div class="header">
            <header class="header-content">
                <a href="./index.php" class="anchor" target="_parent">
                    <img src="./assets/logo.webp" alt="logo" class="logo" width="50px" />
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
                
                <div class="btn11">
                Welcome, <?=$_SESSION['username'];?>
                </div>
                
            </header>
        </div>
    
        <main>
            <!-- Main Landing page made by muzamil -->
            <section>
                <div class="main1">
                    <div class="aboutusflex">
                        <div class="greetinsflex">
                            <span>
                                <h1 class="Mobile-Safety">Online Banking Safety</h1>
                            </span>
                            <span>
                                <h2 class="greetings">
                                    Welcome To Online Banking Safety: Your Guardian.
                                </h2>
                            </span>
                            <span id="element"></span>
                        </div>
                        <!-- <div class="viewmorebtn">
                        <a href="aboutus.php" target="_blank"><button class="viewmore">View More</button></a>
                    </div> -->
                    </div>
                    <div class="home-landing-image imagesss">
                        <img src="./assets/Home Landing image.jpg" class="image1" alt="Home-landing-Images" />
                        <img src="./assets/assests_background.png" class="image2" alt="Home-landing-Images" />
                    </div>
                </div>
            </section>
    
            <!-- Security Section made by muzamil -->
            <section class="section2">
                <div class="section-inner-para">
                    <h3>Security</h3>
                    <div class="security-para">
                        <p>
                            Welcome to our site, your go-to for online banking security
                            awareness. We provide essential tips to help you prevent fraud and
                            stay safe in the digital banking world.
                        </p>
                        <p>The Security Includes:</p>
                    </div>
                </div>
            </section>
    
            <!-- security ellaborate section made by muzamil-->
            <section class="security-boxes">
                <div class="security">
                    <div class="security-left-box">
                        <div class="left-upper-box-risks width same-scsss">
                            <div>
                                <h3>Risk Management</h3>
                                <p>
                                    Identifying and minimizing potential threats to your online
                                    banking security.
                                </p>
                            </div>
    
                            <img src="./assets/risk-management-risk-assessment-risk-analysis.jpeg"
                                alt="Risk-Management-Image" />
                        </div>
                        <div class="left-lower-box-frauds width same-csss">
                            <div>
                                <h3>Fraud Prevention</h3>
                                <p>
                                    Detecting and avoiding scams that target your financial data.
                                </p>
                            </div>
                            <img src="./assets/frauds_prevention.png" alt="Risk-Management-Image" />
                        </div>
                    </div>
                    <div class="security-right-box">
                        <div class="right-upper-box-precautions width same-css">
                            <div>
                                <h3>Precautions</h3>
                                <p>
                                    Practical steps to enhance the security of your accounts and
                                    personal information.
                                </p>
                            </div>
                            <img src="./assets/Preacutions_images.jpg" alt="Risk-Management-Image" />
                        </div>
                        <div class="right-lower-box-protection width same-cs">
                            <div>
                                <h3>Protection</h3>
                                <p>
                                    Tools and strategies to safeguard your online transactions and
                                    maintain privacy.
                                </p>
                            </div>
                            <img src="./assets/Protection_online_banking.jpg" alt="Risk-Management-Image" />
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- About us Section made by muzamil-->
            <section class="aboutussection">
                <div class="aboutsectioninner">
                    <div class="aboutheading-section-big">
                        <h1>About Us</h1>
                    </div>
                    <div class="aboutus">
                        <div class="left-about">
                            <p>
                                Welcome to Bank Safe Online, your trusted resource for
                                navigating the world of online banking securely and with
                                confidence. Our mission is to help individuals and businesses
                                protect themselves from the growing threats of fraud,
                                cyberattacks, and financial risks in the digital banking
                                environment.
                            </p>
                            <p>
                                We are committed to providing up-to-date information, practical
                                tips, and expert advice on how to stay safe online. Whether
                                you're managing personal finances or overseeing corporate
                                accounts, our goal is to empower you with the knowledge and
                                tools needed to safeguard your assets and prevent potential
                                fraud.
                            </p>
                            <button class="button-viewmore">
                                <a href="Aboutus.php">View More</a>
                            </button>
                        </div>
                        <div class="right-about">
                            <img class="image1" src="./assets/vecteezy_mobile-banking-modern-flat-concept-for-web-banner-design_5877695-removebg-preview.png"
                                alt="About-image" />
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- Awareness Topics Section made by muzamil -->
            <section class="Awareness-Topics">
                <div class="main-Awareness-topics-section">
                    <div class="heading-awareness-topics">
                        <h1>Awareness Topics</h1>
                    </div>
                    <div class="swiper">
                        <!-- Additional required wrapper -->



                        <div class="swiper-wrapper">
                          
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex">
                                    <img src="./assets/phishing_scams.png" alt="phishing_scams" style="width: 20%" />
                                    <span>Phishing Scams</span>
                                </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex">
                                    <img src="./assets/strong-password.png" alt="strong-password"
                                        style="width: 20%" />
                                        <span>Strong Passwords</span>
                                    </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex">
                                    <img src="./assets/two-factor-authentication.png" alt="two-factor-authentication"
                                        style="width: 20%" />
                                        <span>Two-Factor Authentication (2FA)</span>
                                    </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex">
                                    <img src="./assets/Secure_wifi.png" alt="Secure_wifi" style="width: 20%" />
                                    <span>Secure Wi-Fi Usage</span>
                                </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex"><img src="./assets/Fake_Webistes.png" alt="Fake_Webistes"
                                        style="width: 20%" />
                                        <span>Recognizing Fake Websites</span>
                                    </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex"><img src="./assets/malware_protection.png" alt="malware_protection"
                                        style="width: 20%" />
                                        <span>Malware Protection</span>
                                    </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex"><img src="./assets/Mobile_banking.png" alt="Mobile_banking"
                                        style="width: 20%" />
                                        <span>Mobile Banking Security</span>
                                    </a>
                            </div>
                            <div class="swiper-slide flex" style="display: flex !important">
                                <a href="" class="display-flex"><img src="./assets/Frauds_popus.png" alt="Frauds_popus" style="width: 20%" />
                                
                                    <span>Fraudulent Pop-Ups</span>
                                </a>
                            </div>

                        </div>




                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
    
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
    
                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="View-all-awareness-topics">
                    <a href="viewall.php">
                        <button>View All</button>
                    </a>
                </div>
            </section>
    
            <!-- awareeness Videos section made by muzamil -->
    <!-- this is best -->
            <section class="Awareness-Videos">
                <div class="inner-Awareness-videos">
                    <div class="heading-awareness-videos">
                        <h1>Awareness-Videos</h1>  
                    </div>
                    <div class="Lower-awareness-flex">
                        <span>
                            <div class="left-videos-awanress same-width-awarness-videos">
                              
                                <div class="left-inner-awareness-videos-upper-box same-width-height-awarness-videos">
                                    <video controls muted autoplay loop src="./Videos/VID-20240905-WA0012.mp4"></video>
                                </div>
                               
                                <div class="left-inner-awareness-videos-lower-box same-font-size-videos">
                                    <span>Two-Factor Authentication (2FA)</span>
                                </div>
                            </div>
                        </span>
                    <span>
                            <div class="middle-videos-awanress same-width-awarness-videos">
                                <div class="middle-inner-awareness-videos-upper-box same-width-height-awarness-videos">
                                    <video controls muted autoplay loop src="./Videos/VID-20240906-WA0001.mp4"></video>
                                </div>
                                <div class="middle-inner-awareness-videos-lower-box same-font-size-videos">
                                    <span>Strong Passwords</span>
                                </div>
                            </div>
                        </span>
                    <span>
                            <div class="right-videos-awanress same-width-awarness-videos">
                                <div class="right-inner-awareness-videos-upper-box same-width-height-awarness-videos">
                                   <video controls muted autoplay loop src="./Videos/VID-20240906-WA0000.mp4"></video>
                                </div>
                                <div class="right-inner-awareness-videos-lower-box same-font-size-videos">
                                    <span>Phishing Scams</span>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="View-all-awareness-topics button-awanress">
                    <a href="./awarenessvideos.php">
                        <button>View All</button>
                    </a>
                </div>
            </section>
        </main>

        <footer>
            <div class="footer">
                <div class="footerinner">
                    <div class="left-foooter">
                        <img src="./assets/logo.webp" alt="24sevensecuritylogo" width="50px" style="border-radius: 50%" />
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
                    <hr />
                </div>
            </div>
            <div class="copyright">
                <p>
                    Copy &copy; 2023 Sorting Bank Safe Online Pvt Ltd.All Rights
                    Rerserved.
                </p>
            </div>
        </footer>
    </div>

    

   <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.155.0/three.min.js"></script>

<!-- ControlKit is needed for Debug Panel -->
<script src="https://cdn.jsdelivr.net/gh/automat/controlkit.js@master/bin/controlKit.min.js"></script>

<script  type="text/javascript"  src="https://unpkg.com/sheryjs/dist/Shery.js"></script>

        <script>
            var typed = new Typed("#element", {
                strings: [
                    "Secure Banking, Anytime, Anywhere.",
                    "Stay Safe, Bank Smart.",
                    "Secure Your Finances, Safeguard Your Future.",
                    "Preventing Risks, Protecting Your Digital Finances.",
                ],
                typeSpeed: 100,
            });
        </script>



    <script src="./Javascripts/script.js"></script>
    <script src="./Javascripts/sheryanime.js"></script>

    <script>
        var app= angular.module('myapp',[]);
        var btn=document.querySelector(".btn");
        var btn1=document.querySelector(".btn11");
        var para =document.querySelector('.btn11>p')
        // console.log(para.innerHTML.length>0);
        app.controller("myctrl",function($scope){
            // $scope.login=false;
            $scope.login = <?= json_encode(!empty($_SESSION['username'])); ?>;
            if($scope.login){
            btn.style.display="none";
            btn1.style.display="block";
            //  $scope.login=true;
        } 
        else{
            btn.style.display="block";
            btn1.style.display="none";
        }
        })
       
    </script>
</body>

</html>