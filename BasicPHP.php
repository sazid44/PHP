<?php
$name='ok';
echo '<h1>It is </h1>'.$name.'<br>';
$x = 10.365;
var_dump($x); echo '<br>';

$cars = array("Volvo","BMW","Toyota");
echo  $cars[0].'<br>';
var_dump($cars);echo '<br>';
//*Array with forLoop
$arrayCount=count($cars);//counts the number of element in array
for ($i=0; $i <$arrayCount ; $i++) { 
    echo $cars[$i].'<br>';
}
//`This is an associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age['Ben'].'<br>';
//*Array with forEachLoop
foreach($age as $a=>$b){
  echo $a.':'.$b.'<br>';
}
//`This is an multidimensional array
$car = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo $car[0][0].'<br>';
  /* Some extra feature of Array
  sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key*/
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
echo $y;
?>