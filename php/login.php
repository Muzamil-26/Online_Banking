<?php
session_start();
$conn=mysqli_connect("localhost","root","","onlinebanking");

if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['Password'];

    $sql="select * from users where email='$email' LIMIT 1";
    $res=mysqli_query($conn,$sql);

    // if(mysqli_num_rows($res)>0){
    //     while($row=mysqli_fetch_assoc($res)){
    //         echo$row['username'];
    //         echo$row['email'];
    //         echo$row['password'];
    //     }
    // }

    if(mysqli_num_rows($res)>0){

        while($row=mysqli_fetch_assoc($res)){
            if($email===$row['email']&&$password===$row['password']){
                echo"You are logined";
                $_SESSION['username']=$row['username'];

            }
            else{
                echo"Something wents Wrong";
            }
        }
    }
    else{
        echo"Something Went Wrongs      ";
    }



}


?>
 <meta http-equiv="refresh" content="0; url=../index.php">