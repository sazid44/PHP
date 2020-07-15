<?php
require_once("connect.php");
$getId=$_REQUEST["id"];
$dltquery="DELETE FROM muzahidul WHERE id=$getId";
$runQuery=mysqli_query($connect,$dltquery);
/*if($runQuery==true){
    header("location: index.php?action=deleted");
}*/
if ($runQuery==true) {
    echo '1';
}

?>