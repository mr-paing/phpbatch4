<?php 

// echo "Hello";

// => Define Class Object (Object Oriented Programming)

// class Classname{
//     properties
//     methods 
// }

// new Classname();


// Object / Calss Object
class Myproperties{
    // Properties 
    var $firstname = "Data Land";
    var $lastname = "Technology";
}

$obj = new Myproperties();

echo "This is new Object <br/>";

echo $obj->firstname." ".$obj->lastname; // no need to add $ in veriable name 

?>