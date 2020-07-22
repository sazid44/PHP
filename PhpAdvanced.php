<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  <!-- 
   <form enctype="multipart/form-data" action="getAdvanced.php" method="get">
   <input type="text" name="userInput"><br><br>
<input type="file" name="uploadFile"><br><br>
  
   <input type="submit" value="submit">
      </form>-->
   <?php
   session_start();
   $_COOKIE["session"]="hello";
   echo $_COOKIE["session"];
  //setcookie("cookie","SAZID",time()+10);
 //echo $_COOKIE["cookie"];
   ?>
   
   
   
   

</body>
</html>