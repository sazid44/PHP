<?php
      require_once("connect.php");
   if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["usr_email"]) && isset($_REQUEST["usr_pwd"])){
   $fname =$_REQUEST["fname"]; 
   $lname =$_REQUEST["lname"];
   $email =$_REQUEST["usr_email"];
   $pwd =$_REQUEST["usr_pwd"];
  
   $insertQuery="INSERT INTO muzahidul (fname,lname,email,usr_pwd)VALUES('$fname','$lname','$email','$pwd')";
   $check=mysqli_query($connect,$insertQuery); 
   if($check==true){
       header("location: index1.php?action=true");
   } else{
    header("location: index1.php?action=false");
     
   }
}
   ?>