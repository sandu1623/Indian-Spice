<?php

      $conn=mysqli_connect("localhost","root","","logpage");
        if($conn){
        echo ""; 
        }
        else{
            echo"faild";
        }
        
        $dbemail=$_POST['email'];
        $dbpassword=$_POST['password'];
       
      $data = "INSERT INTO loging VALUES('','$dbemail','$dbpassword')";
        $check = mysqli_query($check,$data);
        if($check){
            echo"Data sended";
        }
        else{
            echo"Data not send";
        }
        ?>