<?php

// Class Object
class Mymethod{
    // Access Modifier
        // public = anywhere can access 
        // private = only access inside main class 
        // protected = subclass / Extended calss can access 

    // Class Mehtod / Mehtod
    public function greeting(){
        echo "Have a good day <br/>";
    }

    public function calculate($num){
        echo "Greeting calculate number is = {$num} <br/>";
    }

    public function result($num=1){
        echo "Greeting calculate number is = {$num} <br/>";
    }
}

$obj = new Mymethod();

echo "This is class Method <br/>";

$obj->greeting();

// $obj->calculate(); // no action without parameter
$obj->calculate(150); // Greeting calculate number is = 150
// $obj->result(); // 1 - default parameter 
$obj->result(100); // 100


?>