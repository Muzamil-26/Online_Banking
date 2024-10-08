<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Banking Security - Bank Safe Online</title>
    <link rel="stylesheet" href="../stylesheets/emailsecurity.css">
    <link rel="stylesheet" href="../stylesheets/Navbar.css">
    <link rel="stylesheet" href="../stylesheets/Footer.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>

<body>

    <!-- <div class="header">
        <header class="header-content">
            <a href="../index.php" class="anchor" target="_parent">
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
                    <img src="../assets/mobilebankingbg.png" alt="mobile banking security">
                </div>
                <div class="intro">
                    <h1>Introduction</h1>
                    <p>With the rise of mobile banking, managing finances has become more convenient than ever. However, this convenience comes with its own set of security challenges. Ensuring the safety of your mobile banking transactions is essential to protect your financial information.</p>
                </div>
                <br />
                <div class="threats">
                    <h1>Possible Threats</h1>
                    <p>Understanding the threats to mobile banking security can help you take appropriate precautions:</p>
                    <div class="lists">
                        <ol>
                            <li><b>Phishing Attacks:</b> Cybercriminals may send fraudulent messages to trick you into providing sensitive information, such as passwords and PINs.</li>
                            <li><b>Malware:</b> Malicious software can infect your device, potentially compromising your banking information.</li>
                            <li><b>Public Wi-Fi Risks:</b> Using public Wi-Fi networks can expose your banking transactions to eavesdropping.</li>
                            <li><b>SIM Swapping:</b> Attackers can hijack your phone number to intercept authentication codes sent via SMS.</li>
                            <li><b>Unsecure Apps:</b> Downloading banking apps from unofficial sources can lead to malware infections.</li>
                        </ol>
                    </div>
                </div>
                <br />
                <div class="bestpractices">
                    <h1>Best Practices</h1>
                    <div class="practiceslists2">
                        <ol>
                            <li> Use a secure mobile banking app: Download your bank’s official app from a trusted source, such as the App Store or Google Play.</li>
                            <li> Use strong, unique passwords: Set strong passwords for your banking app and change them regularly.</li>
                            <li> Enable biometric authentication: Use fingerprint or facial recognition to add an extra layer of security.</li>
                            <li> Be cautious on public Wi-Fi: Avoid accessing your bank account while connected to unsecured Wi-Fi networks.</li>
                            <li> Monitor your accounts regularly: Keep an eye on your bank statements and transaction history for any unauthorized activity.</li>
                            <li> Keep your device secure: Install security updates and antivirus software to protect against malware.</li>
                        </ol>
                    </div>
                    <p>By following these best practices, you can enhance your mobile banking security and protect your financial information.</p>
                </div>
                <br />
                <div class="operandi">
                    <h1>Modus Operandi</h1>
                    <p>Cybercriminals employ various tactics to exploit vulnerabilities in mobile banking:</p>
                    <div class="operandilists3">
                        <ul>
                            <li>Sending fake messages or alerts that appear to be from your bank, asking for sensitive information.</li>
                            <li>Creating fake banking apps that look legitimate to trick users into entering their credentials.</li>
                            <li>Exploiting security flaws in mobile devices to gain unauthorized access to banking apps.</li>
                            <li>Using social engineering tactics to manipulate individuals into divulging personal information.</li>
                        </ul>
                    </div>
                    <p>Awareness of these tactics is crucial in protecting your mobile banking activities from potential threats.</p>
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
            <p>Copy &copy; 2023 Sorting 24 Seven Security Pvt Ltd. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
