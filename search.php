<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_REQUEST["action"])){
    if($_REQUEST["action"]=="true"){
        echo "<font color='green'>Data Inserted</font>";
       
       
    }else{
        echo "<font color='red'>Data Not Inserted</font>";
    }
}
?>
<form  action="" method="POST">
<input type="text" name='search'>
<input type="submit" name="submitBTN" value="Search" style="border:1px solid #ddd; 
background:tomato; color:white; border-radius:5px;padding:10px" />
</form>
<br>
<br>

<?php
if(isset($_REQUEST['search'])){ 
     $searchName= $_REQUEST['search'];?>
   

   <table border='1px'>

<tr>
<td><b>SN</b></td>
<td><b>DB id</b></td>
    <td><b>fname</b></td>
    <td><b>lname</b></td>
    <td><b>email</b></td>
    <td><b>password</b></td>
    <td><b>Profile picture</b></td>
    <td><b>Action</b></td>
</tr>
<?php
require_once("connect.php");


$dataInsert= "SELECT*FROM muzahidul WHERE fname LIKE '%$searchName%'";
$connection=mysqli_query($connect,$dataInsert);
if($connection==true){
    $snCount=1;
    while($mydata=mysqli_fetch_array($connection)){?>

     <tr>
     <td><?php echo $snCount;$snCount++;?></td>
     <td><?php echo $mydata["id"];?></td>
        <td><?php echo $mydata["fname"];?></td>
        <td><?php echo $mydata["lname"];?></td>
        <td><?php echo $mydata["email"];?></td>
        <td><?php echo $mydata["usr_pwd"];?></td>
        <td><center><img width='60px' src="images/<?php echo $mydata["avatar"];?>" alt=""></center></td>
        <td><a href="edit.php?edit_id=<?php echo $mydata["id"];?>">Edit</a> | <a href="delete.php?id=<?php echo $mydata["id"];?>">Delete</a></td>
    </tr>
    
    

   <?php }}?>






</table>
<?php } ?>

    
<?php 
   
   /*   $updateData="UPDATE muzahidul SET fname='sazid1',lname='sazid2' WHERE id=1";
    mysqli_query($connect,$updateData);
    $updateData1="DELETE muzahidul SET fname='sazid1',lname='sazid2' WHERE id=2";
    mysqli_query($connect,$updateData1);
   $updateData2="INSERT INTO muzahidul (fname,lname,email,usr_pwd)VALUES('freelancer','nasim','nasim@gmail.com','23124')";
   mysqli_query($connect,$updateData2);  
    $updateData3="SELECT fname FROM muzahidul;";  

    $result = mysqli_query($connect,$updateData3);
 

 if($result==true){
    $dataCount= mysqli_num_rows($result);
    if($dataCount>0){
    while($show= mysqli_fetch_array($result)){
    echo $show["fname"];
    echo "<br>";
    header("location: http://localhost:8080/New%20folder/core.php");
    
   }
}else{
  echo "No data available";
}
 }else{
    echo mysqli_error($connect);
 }*/
 









    ?>
</body>
</html>