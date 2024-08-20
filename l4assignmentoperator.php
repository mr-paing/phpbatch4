<?php

// => Assignment Operator 

// =
// += 
// -=
// *=
// /=
// %=
// ++
// --


# Assign (=)

$city = ""; // Declare 
$city = null; // Declare 
$city = "Yangon"; // Assign or Initialize 
$city = "Mandalay"; // Overwrite or Override or Reassign 
echo $city , "<br/>";

$x = 100;
$y = 200;

echo $x , "<br/>"; //100
echo $y , "<br/>"; //200

$x = $y;
echo $x , "<br/>"; // 200

$x = $x + $y;
echo $x . "<br/>"; // 400


$i = 10;
echo $i . "<br/>"; // 10

// $i = 10 + 1;
// echo $i . "<br/>"; // 11

// $i += 1;
// echo $i . "<br/>"; // 11

$i++;
echo $i . "<br/>"; // 11



$y = 20;
echo $y . "<br/>"; // 20

// $y = 20 - 1;
// echo $y . "<br/>"; // 19

// $y -= 1;
// echo $y . "<br/>"; // 19

$y--;
echo $y . "<br/>"; // 19


$num = 100;

// $num += 40;
// echo $num . "<br/>"; //140

// $num -= 40;
// echo $num . "<br/>"; //60

// $num *= 40;
// echo $num . "<br/>"; //4000

// $num /= 40;
// echo $num . "<br/>"; //2.5

$num %= 40;
echo $num . "<br/>"; //20

?>