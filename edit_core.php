<?php
      require_once("connect.php");
if(isset($_REQUEST["submitButton"])){
    $fname =$_REQUEST["fname"]; 
    $lname =$_REQUEST["lname"];
    $email =$_REQUEST["usr_email"];
    $pwd =$_REQUEST["usr_pwd"];
    $coreEdit =$_REQUEST["editingId"];
    $updateQuery="UPDATE  muzahidul SET fname='$fname',lname='$lname',email='$email',usr_pwd='$pwd' WHERE id=$coreEdit";
    $runUpdate=mysqli_query($connect,$updateQuery); 
    if($runUpdate==true){
        header("location: index.php?action=true");
    } else{
echo mysqli_error($connect);
    }
}else{
    echo mysqli_error($connect);
}


      ?>
