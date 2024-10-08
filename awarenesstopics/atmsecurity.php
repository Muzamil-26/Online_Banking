<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Security - Bank Safe Online</title>
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
                    <img src="../assets/atmsecuritybg.png.jpeg" alt="ATM Security">
                </div>
                <div class="intro">
                    <h1>Introduction</h1>
                    <p>Automated Teller Machines (ATMs) are convenient for withdrawing cash and managing bank transactions. However, they can also be targets for criminals. Understanding how to use ATMs safely is essential to protect your money and personal information.</p>
                </div>
                <br />
                <div class="security-tips">
                    <h1>ATM Security Tips</h1>
                    <p>Follow these best practices to ensure your safety when using ATMs:</p>
                    <div class="tips-list">
                        <ol>
                            <li><b>Choose a Safe Location:</b> Use ATMs in well-lit, populated areas, preferably at bank branches. Avoid using ATMs in secluded or poorly lit locations.</li>
                            <li><b>Check for Skimming Devices:</b> Before using an ATM, inspect the card reader and keypad for any suspicious devices that could capture your card information or PIN.</li>
                            <li><b>Cover Your PIN:</b> Always shield the keypad with your hand when entering your PIN to prevent others from seeing it.</li>
                            <li><b>Be Aware of Your Surroundings:</b> Stay alert to your environment. If you notice anything suspicious or feel uncomfortable, cancel your transaction and leave the area.</li>
                            <li><b>Keep Your Receipt:</b> Always take your receipt after a transaction. It provides a record of your activity and can help identify unauthorized transactions.</li>
                            <li><b>Limit Withdrawals:</b> Withdraw only the amount you need. The less cash you carry, the less risk you have of theft.</li>
                            <li><b>Report Suspicious Activity:</b> If you see anything unusual or if the ATM captures your card, report it to your bank immediately.</li>
                        </ol>
                    </div>
                </div>
                <br />
                <div class="conclusion">
                    <h1>Conclusion</h1>
                    <p>ATM security is crucial for safeguarding your financial information and preventing theft. By following the tips outlined in this guide, you can minimize your risk and use ATMs with confidence.</p>
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
