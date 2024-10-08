<?php
    $conn=mysqli_connect("localhost","root","","onlinebanking");

    if(isset($_POST['submit'])){
        $username=$_POST['name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $count=0;
     $username1=filter_var($username,FILTER_SANITIZE_STRING);
    $email1=filter_var($email,FILTER_SANITIZE_EMAIL);
    
    $sql1="select email from users where email='$email'";
    $res=mysqli_query($conn,$sql1);
    while($rows=mysqli_fetch_assoc($res)){
        
        foreach ($rows as $x => $y) {
           if($y){
            $count++;
           }

        }
        echo $count;

    }



    if($username===$username1&&$email===$email1&&$count===0&&$password>0){
        $sql="insert into `users`(username,email,password) values('$username1','$email1','$password')";

        $query=mysqli_query($conn,$sql);
        $res=mysqli_close($conn);
            if($res)
        {
            echo"You are Reigster";
        }
        else{
            echo"Something Went Wrong";
        }
        }
    else{
        echo"Something Went Wrong";

    }

}
   

?>
