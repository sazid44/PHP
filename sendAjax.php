<?php
$dbUser='sazid';
$dbPwd='123';
$usrAj=$_REQUEST['uName'];
$usrPwdAj=$_REQUEST['uPwd'];
if($dbUser==$usrAj && $dbPwd==$usrPwdAj){
    echo 'ok';
}else{
    echo 'not ok';
}










?>