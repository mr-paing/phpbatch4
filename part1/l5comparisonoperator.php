<?php
// => comparison Operators

// ==
// ===
// !=      not equal 
// <>      not equal
// !== 
// <
// >
// >= 
// <= 
// ?   (Ternary Operators)


$num1 = 10;
$num2 = "10";

echo $num1 == $num2 ? "Your Condition is true" : "Your condition is false"; //true
echo ($num1 == $num2) ? "Your Condition is true" : "Your condition is false"; //true
echo $num1 === $num2 ? "Your Condition is true" : "Your condition is false"; //false

echo $num1 != $num2 ? "Your Condition is true" : "Your condition is false"; // false
echo $num1 !== $num2 ? "Your Condition is true" : "Your condition is false"; //true

echo ($num1 > $num2) ? "Your Condition is true" : "Your condition is false"; 
echo ($num1 < $num2) ? "Your Condition is true" : "Your condition is false"; 
echo ($num1 >= $num2) ? "Your Condition is true" : "Your condition is false"; 
echo ($num1 <= $num2) ? "Your Condition is true" : "Your condition is false"; 



?>