<?php

// => settype(variable,type); function

$val1 = "50";
echo gettype($val1) , "<br/>"; // string
settype($val1,"integer");
echo gettype($val1) , "<br/>"; // integer

$val2 = 200;
echo gettype($val2) , "<br/>"; // integer
settype($val2,"string");
echo gettype($val2) , "<br/>"; //  string

$val3 = true;
echo gettype($val3) , "<br/>"; // boolean
settype($val3,"string");
echo gettype($val3) , "<br/>"; //  string

$val4 = FALSE;
echo gettype($val4) , "<br/>"; // boolean
settype($val4,"string");
echo gettype($val4) , "<br/>"; //  string


?>