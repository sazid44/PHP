<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<form enctype="multipart/form-data" action="core.php" method="POST">
<input type="text" name="fname" placeholder="firstname"/>
<input type="text" name="lname" placeholder="lastname"/>
<input type="email" name="usr_email" placeholder="molla@gmail.com"/>
<input type="text" name="usr_pwd" placeholder="insert password"/>
<input type="file" name="avatar"/>
<input type="submit" name="submit" value="Sign up"/>
</form>
<br>
<br>
<table border='1px'>

<tr>
<td><b>SN</b></td>
<td><b>DB id</b></td>
    <td><b>fname</b></td>
    <td><b>lname</b></td>
    <td><b>email</b></td>
    <td><b>password</b></td>
    <td><b>Avatar</b></td>
    <td><b>Action</b></td>
</tr>
<?php
require_once("connect.php");

$dataInsert= "SELECT*FROM muzahidul";
$connection=mysqli_query($connect,$dataInsert);//Running the query(making an object)
if($connection==true){
    $snCount=1;
    //making an array
    while($mydata=mysqli_fetch_assoc($connection)){?>

     <tr id="data<?php echo $mydata["id"];?>">
     <td><?php echo $snCount;$snCount++;?></td>
     <td><?php echo $mydata["id"];?></td>
        <td><?php echo $mydata["fname"];?></td>
        <td><?php echo $mydata["lname"];?></td>
        <td><?php echo $mydata["email"];?></td>
        <td><?php echo $mydata["usr_pwd"];?></td>
        <td><center><img width='60px' src="images/<?php echo $mydata["avatar"];?>" alt=""></center></td>
        <td><a href="edit.php?edit_id=<?php echo $mydata["id"];?>">Edit</a> | <a onclick="return confirm('Are you sure?')" href="#" id="deleteJq" data-myvalue="<?php echo $mydata["id"];?>";>Delete</a></td>
        
       <!--href="delete.php?id=<?php echo $mydata["id"];?>"-->
    </tr>
 <?php }}?>
</table>

<script>
$('a#deleteJq').on("click",function(){
    var getThat=$(this).data("myvalue");
    //alert(getThat);
    $.post("delete.php",{id:getThat},function (returnData) {
        var myReturn=returnData;
        if (myReturn=='1') {
           
            alert('Data deleted'); 

        }
      
    })
  $(this).parent().parent().remove();
})
</script>
    
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