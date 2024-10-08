<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Wi-Fi Usage - Mobile Safety</title>
    <link rel="stylesheet" href="../stylesheets/emailsecurity.css">
    <link rel="stylesheet" href="../stylesheets/Navbar.css">
    <link rel="stylesheet" href="../stylesheets/Footer.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>

<body>

    <!-- <div class="header">
        <header class="header-content">
            <a href="index.php" class="anchor" target="_parent">
                <img src="../assets/logo.webp" alt="logo" class="logo" width="50px">
                <div class="text">
                    <p class="logo-text1">Bank Safe</p>
                    <p class="logo-text2">Online</p>
                </div>
            </a>
            <nav class="navigation">
                <a href="../index.php">Home</a>
                <a href="../Aboutus.php">About us</a>
                <a href="../viewall.php">Awareness Topics</a>
                <a href="../awarenessvideos.php">Awareness Videos</a>
                <a href="../Contactus.php" target="_blank">Contact us</a>
            </nav>
            <div class="btn">
                <a href="../login.php" target="_blank"><button class="Loginbtn">Login</button></a>
                <a href="../signup.php" target="_blank"><button class="signupbtn">Sign Up</button></a>
            </div>
        </header>
    </div> -->
    <?php
    include("../php/Navbar2.php");

?>
    <main>
        <div class="main">
            <div class="innercontent">
                <div class="img">
                    <img src="../assets/wifi-security.png" alt="Secure Wi-Fi Usage">
                </div>
                <div class="intro">
                    <h1>Introduction to Secure Wi-Fi Usage</h1>
                    <p>In today's digital world, Wi-Fi is an essential part of our daily lives, allowing us to connect to the internet from various devices. However, using public or unsecured Wi-Fi networks can pose significant security risks, including unauthorized access to personal information and data breaches.</p>
                </div>
                <br />
                <div class="risks">
                    <h1>Potential Risks of Unsecured Wi-Fi</h1>
                    <p>Using unsecured Wi-Fi can lead to several threats, including:</p>
                    <div class="lists">
                        <ol>
                            <li><b>Data Interception:</b> Hackers can intercept data transmitted over unsecured networks, gaining access to sensitive information.</li>
                            <li><b>Man-in-the-Middle Attacks:</b> Attackers can position themselves between your device and the Wi-Fi network, allowing them to monitor and manipulate data traffic.</li>
                            <li><b>Malware Distribution:</b> Unsecured networks can be used to distribute malware to connected devices, potentially compromising their security.</li>
                            <li><b>Identity Theft:</b> Personal information accessed over unsecured networks can lead to identity theft and fraud.</li>
                        </ol>
                    </div>
                </div>
                <br />
                <div class="best-practices">
                    <h1>Best Practices for Secure Wi-Fi Usage</h1>
                    <div class="practiceslists">
                        <ol>
                            <li><b>Use a VPN:</b> A Virtual Private Network (VPN) encrypts your internet connection, making it difficult for hackers to intercept your data.</li>
                            <li><b>Connect to Secure Networks:</b> Always prefer to connect to secured networks that require a password. Avoid using public or open Wi-Fi whenever possible.</li>
                            <li><b>Disable File Sharing:</b> Turn off file sharing and other sharing settings on your devices when connected to public Wi-Fi networks.</li>
                            <li><b>Use HTTPS:</b> Ensure that the websites you visit use HTTPS to encrypt data transmitted between your browser and the website.</li>
                            <li><b>Forget Networks:</b> After using a public network, forget it on your device to prevent automatic reconnection in the future.</li>
                            <li><b>Keep Software Updated:</b> Regularly update your device's software and antivirus programs to protect against vulnerabilities.</li>
                        </ol>
                    </div>
                    <p>By following these best practices, you can significantly reduce the risks associated with using Wi-Fi networks and protect your sensitive information.</p>
                </div>
                <br />
                <div class="conclusion">
                    <h1>Conclusion</h1>
                    <p>Secure Wi-Fi usage is crucial in today's interconnected world. By being aware of the risks and implementing best practices, you can protect your personal data and enhance your online security. Always prioritize security over convenience when connecting to Wi-Fi networks.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="footerinner">
                <div class="left-foooter">
                    <img src="../assets/logo.webp" alt="24sevensecuritylogo" width="50px" style="border-radius: 50%;">
                    <p class="flex-text1">Bank Safe</p>
                    <p class="flex-text2">Online</p>
                    <p class="flex-text3">Be Aware Of Scams.</p>
                </div>
                <div class="middle1-footer">
                    <p id="footertexts1">Menu</p>
                    <a href="../index.php" class="anchorhome">Home</a>
                    <a href="../Aboutus.php" class="anchorfeatures">About us</a>
                    <a href="../viewall.php" class="anchorsafety">Awareness Topics</a>
                    <a href="../awarenessvideos.php" class="anchorblogs">Awareness Videos</a>
                    <a href="../Contactus.php" class="anchorcontact">Contact us</a>
                </div>
                <div class="middle2-footer">
                    <p id="footertexts2">Services</p>
                    <a href="#terms&condition" id="anchortermscondition">Terms & Conditions</a>
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
            <p>Copy &copy; 2023 Sorting 24 seven security Pvt Ltd. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
