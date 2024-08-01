<?php

    $servername="localhost";
	$dbemail="root";
	$dbpassword="";
	$dbname="singingpage";
	$check=mysqli_connect($servername,$dbemail,$dbpassword,$dbname);
	
	if($check){
		//echo"connected";
	}
	else{
		echo"connection failed";
	}
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Confirmpassword=$_POST['Confirmpassword'];

	$send="INSERT INTO sing_form VALUES('','$FirstName','$LastName','$Email','$Password','$Confirmpassword')";
	$data=mysqli_query($check,$send);

	if($data){
		//echo"data send succesfully";
	}
	else{
		echo"data did not send";
	}
	
	