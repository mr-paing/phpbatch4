<?php 

// => Arithmetic Operator 
// + - * / %

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawlamyine";
$car = false;
$myarrs = ["maung maung",'kyaw kyaw'];
$colors = array('red','green','blue');

echo $num1 , "<br/>";
echo $num2 , "<br/>";
echo $num1 + $num2 , "<br/>";
echo $num1 - $num2 , "<br/>";
echo $num2 - $num1 , "<br/>";
echo $num1 * $num2 , "<br/>";
echo $num2 / $num1 , "<br/>";
echo $num2 % $num1 , "<br/>";

echo $myarrs; // Array  #cann't use echo in array
print $myarrs; // Array 

echo "<br/>";
var_dump($num1); // int(100)

echo "<br/>";
var_dump($num3); // float(30.28)

echo "<br/>";
var_dump($city); // string(10) "Mawlamyine"

echo "<br/>";
var_dump($car); // bool(false)

echo "<br/>";
var_dump($myarrs); // array(2) { [0]=> string(11) "maung maung" [1]=> string(9) "kyaw kyaw" }

echo "<br/>";

$num4 = true;
$num5 = "10";
$num6 = '20';

var_dump($num5,$num6); // tring(2) "10" string(2) "20"
echo "<br/>";

echo $num5+$num6; // 30
echo "<br/>";

echo $num6 - $num5; // 10
echo "<br/>";

echo $num4 + $num5; // 11
echo "<br/>";

var_dump($num5 + $num6); // int(30)
echo "<br/>";


// => Overwrite [or] Override 
$num5 = 50;
$num6 = '60';
var_dump($num5,$num6); // int(50) string(2) "60"
echo "<br/>";

echo $num5 + $num6; // 110


?>