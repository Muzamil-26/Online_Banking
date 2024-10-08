<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Engineering Attacks - Bank Safe Online</title>
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
                    <img src="../assets/socialengineeringbg.png" alt="Social Engineering Attacks">
                </div>
                <div class="intro">
                    <h1>Introduction</h1>
                    <p>Social engineering attacks exploit human psychology rather than technical vulnerabilities. 
                    These attacks manipulate individuals into divulging confidential information or performing actions that compromise security.</p>
                    <p>Understanding social engineering tactics is essential for preventing these attacks.</p>
                </div>
                <br />
                <div class="common-types">
                    <h1>Common Types of Social Engineering Attacks</h1>
                    <p>Familiarity with the following attack types can help you recognize and prevent them:</p>
                    <div class="lists">
                        <ol>
                            <li><b>Phishing:</b> Fraudulent emails or messages that appear to come from legitimate sources, tricking recipients into providing sensitive information.</li>
                            <li><b>Spear Phishing:</b> Targeted phishing attacks directed at specific individuals or organizations, often using personalized information.</li>
                            <li><b>Pretexting:</b> Creating a fabricated scenario to obtain information from a victim, such as impersonating a bank representative.</li>
                            <li><b>Baiting:</b> Offering something enticing (like free software) to lure victims into providing sensitive information or downloading malware.</li>
                            <li><b>Tailgating:</b> Gaining physical access to restricted areas by following someone with legitimate access, often without their knowledge.</li>
                        </ol>
                    </div>
                </div>
                <br />
                <div class="impact-of-attacks">
                    <h1>Impact of Social Engineering Attacks</h1>
                    <p>These attacks can lead to severe consequences, including:</p>
                    <div class="impact-lists">
                        <ul>
                            <li>Data breaches compromising sensitive information.</li>
                            <li>Financial losses due to unauthorized transactions.</li>
                            <li>Loss of trust and reputation for organizations.</li>
                            <li>Legal ramifications from non-compliance with data protection regulations.</li>
                        </ul>
                    </div>
                </div>
                <br />
                <div class="protection-strategies">
                    <h1>Strategies to Protect Against Social Engineering Attacks</h1>
                    <div class="strategies-lists">
                        <ol>
                            <li><b>Education and Awareness:</b> Regularly train employees and users on recognizing social engineering tactics and potential threats.</li>
                            <li><b>Verification:</b> Always verify the identity of anyone requesting sensitive information, especially via phone or email.</li>
                            <li><b>Strong Authentication:</b> Implement multi-factor authentication (MFA) for accessing sensitive accounts and systems.</li>
                            <li><b>Incident Response Plan:</b> Develop and maintain an incident response plan to address social engineering attacks promptly and effectively.</li>
                            <li><b>Secure Physical Access:</b> Use access controls to prevent unauthorized personnel from entering sensitive areas.</li>
                        </ol>
                    </div>
                    <p>Implementing these strategies can significantly reduce the risk of falling victim to social engineering attacks.</p>
                </div>
                <br />
                <div class="conclusion">
                    <h1>Conclusion</h1>
                    <p>Social engineering attacks are prevalent and increasingly sophisticated. By staying informed and adopting proactive measures, individuals and organizations can safeguard against these tactics and protect sensitive information.</p>
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
