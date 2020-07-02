<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_REQUEST["edit_id"])){

$editId = $_REQUEST["edit_id"];

require_once("connect.php");
$selectInfo= "SELECT*FROM muzahidul WHERE id=$editId";
$runInfo=mysqli_query($connect,$selectInfo);

    while($updatoData=mysqli_fetch_array($runInfo)){
?>
<form action="edit_core.php" method="POST">
<input type="text" name="fname" value="<?php echo $updatoData["fname"];?>" placeholder="firstname"/>
<input type="text" name="lname" value="<?php echo $updatoData["lname"];?>" placeholder="lastname"/>
<input type="text" name="usr_email" value="<?php echo $updatoData["email"];?>" placeholder="molla@gmail.com"/>
<input type="text" name="usr_pwd" value="<?php echo $updatoData["usr_pwd"];?>" placeholder="insert password"/>
<input type="submit" name="submitButton" value="Edit data"/>
<input type="hidden" name="editingId" value="<?php echo $editId ?>"/>
</form>


<?php }} ?>
</body>
</html>

