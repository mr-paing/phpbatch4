<?php 
//Data Type 
// string 
// int 
// float 
// bool 
// array 
// object 
// unset 

# cast to string 
    $val1 = "hello"; //string
    var_dump($val1);
    $result = (string) $val1;
    var_dump($result);

    echo "<br/>";

    $val2 = 10; //Integer
    var_dump($val2);
    $result = (string)$val2;
    var_dump($result);

    echo "<br/>";

    $val3 = 34.56; //float
    var_dump($val3);
    $result = (string)$val3;
    var_dump($result);

    echo "<br/>";

    $val4 = true; //Boolean 
    var_dump($val4);
    $result = (string)$val4;
    var_dump($result); // true : "" | false : "";

    echo "<br/>";

    $val5 = null; //NULL
    var_dump($val5);
    $result = (string)$val5;
    var_dump($result);

    echo "<hr/>";


# cast to Integer 
    $val1 = "hello"; //string
    var_dump($val1);
    $result = (int) $val1;
    var_dump($result);

    echo "<br/>";

    $val2 = 10; //Integer
    var_dump($val2);
    $result = (int)$val2;
    var_dump($result);

    echo "<br/>";

    $val3 = 34.56; //float
    var_dump($val3);
    $result = (int)$val3;
    var_dump($result);

    echo "<br/>";

    $val4 = true; //Boolean 
    var_dump($val4);
    $result = (int)$val4;
    var_dump($result); // true : "" | false : "";

    echo "<br/>";

    $val5 = null; //NULL
    var_dump($val5);
    $result = (int)$val5;
    var_dump($result);

    echo "<hr/>";


# cast to float 
    $val1 = "hello"; //string
    var_dump($val1);
    $result = (float) $val1;
    var_dump($result);

    echo "<br/>";

    $val2 = 10; //Integer
    var_dump($val2);
    $result = (float)$val2;
    var_dump($result);

    echo "<br/>";

    $val3 = 34.56; //float
    var_dump($val3);
    $result = (float)$val3;
    var_dump($result);

    echo "<br/>";

    $val4 = true; //Boolean 
    var_dump($val4);
    $result = (float)$val4;
    var_dump($result); // float(1)

    echo "<br/>";

    $val5 = null; //NULL
    var_dump($val5);
    $result = (float)$val5;
    var_dump($result); //float(0)

    echo "<hr/>";


# cast to boolean 
    $val1 = "hello"; //string
    var_dump($val1);
    $result = (bool) $val1;
    var_dump($result); // bool(true)

    echo "<br/>";

    $val2 = 10; //Integer
    var_dump($val2);
    $result = (bool)$val2;
    var_dump($result); // bool(true)

    echo "<br/>";

    $val3 = 34.56; //float
    var_dump($val3);
    $result = (bool)$val3;
    var_dump($result); // bool(true)

    echo "<br/>";

    $val4 = true; //Boolean 
    var_dump($val4);
    $result = (bool)$val4;
    var_dump($result); // bool(true)

    echo "<br/>";

    $val5 = null; //NULL
    var_dump($val5);
    $result = (bool)$val5;
    var_dump($result); // bool(false)

    echo "<hr/>";

# cast to array 
    $val1 = "hello"; //string
    var_dump($val1);
    $result = (array) $val1;
    var_dump($result); // array(1) { [0]=> string(5) "hello" }

    echo "<br/>";

    $val2 = 10; //Integer
    var_dump($val2);
    $result = (array)$val2;
    var_dump($result); // array(1) { [0]=> int(10) }

    echo "<br/>";

    $val3 = 34.56; //float
    var_dump($val3);
    $result = (array)$val3;
    var_dump($result); // array(1) { [0]=> float(34.56000000000000227373675443232059478759765625) }

    echo "<br/>";

    $val4 = true; //Boolean 
    var_dump($val4);
    $result = (array)$val4;
    var_dump($result); // array(1) { [0]=> bool(true) }

    echo "<br/>";

    $val5 = null; //NULL
    var_dump($val5);
    $result = (array)$val5;
    var_dump($result); // array(0) { }

    echo "<hr/>";

# cast to object 
    $val1 = "hello"; //string
    var_dump($val1);
    $result = (object) $val1;
    var_dump($result); // object(stdClass)#1 (1) { ["scalar"]=> string(5) "hello" }

    echo "<br/>";

    $val2 = 10; //Integer
    var_dump($val2);
    $result = (object)$val2;
    var_dump($result); // object(stdClass)#2 (1) { ["scalar"]=> int(10) }

    echo "<br/>";

    $val3 = 34.56; //float
    var_dump($val3);
    $result = (object)$val3;
    var_dump($result); // object(stdClass)#1 (1) { ["scalar"]=> float(34.56000000000000227373675443232059478759765625) }

    echo "<br/>";

    $val4 = true; //Boolean 
    var_dump($val4);
    $result = (object)$val4;
    var_dump($result); // object(stdClass)#2 (1) { ["scalar"]=> bool(true) }

    echo "<br/>";

    $val5 = null; //NULL
    var_dump($val5);
    $result = (object)$val5;
    var_dump($result); // object(stdClass)#1 (0) { }

    echo "<hr/>";


# cast to Null 
    // $val1 = "hello"; //string
    // var_dump($val1);
    // $result = (unset) $val1;
    // var_dump($result); // error

    // echo "<br/>";

    // $val2 = 10; //Integer
    // var_dump($val2);
    // $result = (unset)$val2;
    // var_dump($result); // error

    // echo "<br/>";

    // $val3 = 34.56; //float
    // var_dump($val3);
    // $result = (unset)$val3;
    // var_dump($result); // error

    // echo "<br/>";

    // $val4 = true; //Boolean 
    // var_dump($val4);
    // $result = (unset)$val4;
    // var_dump($result); // error

    // echo "<br/>";

    // $val5 = null; //NULL
    // var_dump($val5);
    // $result = (unset)$val5;
    // var_dump($result); // object(stdClass)#1 (0) { }

    // echo "<hr/>";






?>