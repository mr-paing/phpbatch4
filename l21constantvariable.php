<?php 


# -> Constant Varaible
define('variablename','value');

# striing/int/boolean/float are anything oki ! but can't overwrite
# variablename should be uppercase 
# redefine are deny 


define("FULLNAME","Honey Nway Oo");
echo FULLNAME;  // Honey Nway Oo

echo "<br/>";

define("FULLNAME","Ma Ma Mya");
echo FULLNAME; // Honey Nway Oo

echo "<br/>";

#Note :: it usually use connect with database

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","123456789");
define("DB_NAME","phpdbone");

echo DB_HOST , "<br/>";  //localhost
echo DB_USER , "<br/>";  // root
echo DB_PASS , "<br/>";  // 123456789
echo DB_NAME , "<hr/>";  // phpdbone

# -> constant(variablename) function 
echo constant("DB_HOST") , "<br/>";
echo constant("DB_USER") , "<br/>";
echo constant("DB_PASS") , "<br/>";
echo constant("DB_NAME") , "<hr/>";


// => constant : const keyword
    # striing/int/boolean/float are anything oki ! but can't overwrite
    # variablename should be uppercase 
    # redefine are deny

    const MESSAGE = "Hello sir, Are you ready to learn PHP OOP Concept?";
    echo MESSAGE , "<br/>";                 // Hello sir, Are you ready to learn PHP OOP Concept?
    echo constant("MESSAGE") , "<br/>";     // Hello sir, Are you ready to learn PHP OOP Concept?


    const MESSAGE = "Hello sir, Are you ready to learn Javascript ES6 Concept?";
    echo MESSAGE , "<br/>";                 // Hello sir, Are you ready to learn PHP OOP Concept?
    echo constant("MESSAGE") , "<br/>";     // Hello sir, Are you ready to learn PHP OOP Concept?


 
?>