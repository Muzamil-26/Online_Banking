<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../stylesheets/Navbar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>
<body ng-controller="myctrl">

<?php
    if(!isset($_SESSION['username'])){
        $_SESSION['username']='';
        
    }

?>
    <div class="header">
        <header class="header-content">
            <a href="../index.php" class="anchor" target="_parent">
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