<?php
$name='ok';
echo '<h1>It is </h1>'.$name.'<br>';
$x = 10.365;
var_dump($x); echo '<br>';

  //Use of function
  $new='hello';
function call($x,$y){
   echo $x+$y;
 global $new;//use of global keyword
   echo $new;
  }
  call("10",'20');echo '<br>';
  //Some Mathematical problem
$x=10;
echo ++$x.'<br>';
$y=10;
echo $y++;
echo $y.'<br>';
//PHP length counting
echo 'The length is: '.strlen('hello').'<br>';
//PHP date and time
date_default_timezone_set('Asia/Dhaka');
echo date("d-m-Y h:i").'<br>';
echo 'This is the year since our independence: '.((time()/60/60/24/365.26)-1);//this is counted since 1st January 1970
?>
<pre>
<?php

require_once("connect.php");
$dataInsert= "SELECT*FROM muzahidul";
$connection=mysqli_query($connect,$dataInsert);
echo var_dump($connection).'<br>';
print_r($connection).'<br>';//to see array use print_r
$dataCount=mysqli_num_rows($connection);
echo $dataCount.'<br>';
$mydata=mysqli_fetch_array($connection);
echo var_dump($mydata).'<br>';


?>
