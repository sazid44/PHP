<?php
      require_once("connect.php");
   if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["usr_email"]) && isset($_REQUEST["usr_pwd"])){
   $fname =$_REQUEST["fname"]; 
   $lname =$_REQUEST["lname"];
   $email =$_REQUEST["usr_email"];
   $pwd =$_REQUEST["usr_pwd"];

   $avatar_name =$_FILES["avatar"]["name"];
   $avatar_tmpName =$_FILES["avatar"]["tmp_name"];
   $location = "images/";
  move_uploaded_file($avatar_tmpName, $location."$avatar_name");
  
   $insertQuery="INSERT INTO muzahidul (fname,lname,email,usr_pwd,avatar)VALUES('$fname','$lname','$email','$pwd','$avatar_name')";
   $check=mysqli_query($connect,$insertQuery); 
   if($check==true){
       header("location: index.php?action=true");
   } else{
    header("location: index.php?action=false");
     
   }
}
   ?>