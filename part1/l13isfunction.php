<?php
    //=> Check Variable Type

    // => is_string(variable) function

    $val1 = "Save Myanmar";
    echo "val1 is ". is_string($val1) . "<br/>"; //1
    var_dump($val1) ."<br/>";
    echo gettype($val1) . "<br/>";

    echo "<br/>";

    $val2 = 0;
    echo "val2 is ". is_string($val2);

    echo "<br/>";

    $val3 = 50;
    echo "val3 is ". is_string($val3);

    echo "<br/>";

    $val4 = "50";
    echo "val4 is ". is_string($val4); //1

    echo "<br/>";

    $val5 = true;
    echo "val5 is ". is_string($val5);

    echo "<br/>";

    $val6 = "5";
    echo "val6 is ". is_string($val6); //1

    echo "<br/>";


    // =======================

    // => is_numeric(variable) function
    $val7 = 50;
    echo "val7 is ". is_numeric($val7) . "<br/>"; //1
    echo "val7 is ". is_int($val7) . "<br/>"; //1
    echo "val7 is ". is_integer($val7) . "<br/>"; //1
    echo gettype($val7) . "<br/>"; // integer

    $val8 = 34.56;
    echo "val8 is ". is_numeric($val8) . "<br/>"; //1
    echo "val8 is ". is_int($val8) . "<br/>"; //
    echo "val8 is ". is_integer($val8) . "<br/>"; //


    $val9 = "50";
    //********************
    echo "val9 is ". is_numeric($val9) . "<br/>"; //1
    echo "val9 is ". is_int($val9) . "<br/>"; //
    echo "val9 is ". is_integer($val9) . "<br/>"; //


    // => is_float(variable) function

    $val10 = 40;
    echo "val10 is ". is_float($val10) . "<br/>"; //

    $val11 = 34.56;
    echo "val11 is ". is_float($val11) . "<br/>"; //1
    echo gettype($val11) . "<br/>"; // double

    $val12 = "34.56";
    echo "val12 is ". is_float($val12) . "<br/>"; //



    // => is_bool(variable) function
    $val13 = true;
    echo "val13 is ". is_bool($val13) . "<br/>"; //1
    echo gettype($val13) . "<br/>"; // boolean

    $val14 = FALSE;
    echo "val14 is ". is_bool($val14) . "<br/>"; //1

    $val15 = 1;
    echo "val15 is ". is_bool($val15) . "<br/>"; //

    $val16 = "true";
    echo "val16 is ". is_bool($val16) . "<br/>"; //


    // => is_array(variable) function
    $val17 = "Help Myanmar";
    echo "val17 is ". is_array($val17) . "<br/>"; //

    // $val18 = ["aung aung","su su"];
    $val18 = array("aung aung","su su");
    echo "val18 is ". is_array($val18) . "<br/>"; // 1

// => is_null(variable) function
    $val19 = 0;
    echo "val19 is ". is_null($val19) . "<br/>"; //

    $val20 = null;
    echo "val20 is ". is_null($val20) . "<br/>"; // 1

    $val21 = Null;
    echo "val21 is ". is_null($val21) . "<br/>"; // 1

    $val22 = NULL;
    echo "val22 is ". is_null($val22) . "<br/>"; // 1

    $val23 = "null";
    echo "val20 is ". is_null($val23) . "<br/>"; // 
    
// => EMPTY(variable) & ISSET(variable) function
    // Note :: the following values are empty 
    /*

    0
    0.0
    "0"
    ""
    NULL
    FALSE 
    []

    */

    // empty() သည်  value မရှိဘူးလား စစ်
    // issset() သည် value ရှိသလား စစ်သည် ၊ ထို့ပြင် click သလား ဆိုတာကိုလည်း စစ်ေသးသည်။


    // isset() check value_has , click_button

    $val24 = [];
    if(empty($val24)){
        echo "Your varable is empty. <br/>";
    }else{
        echo "Your variable is not vale <br/>";
    }

    $val25 = [];
    if(empty($val25)){
        echo "Your varable with value";
    }else{
        echo "Your varable without value";
    }

    echo "<br/>";

// => isset() & unset() #unset() is delete 

    $city = "Yangon";
    $capital = "Napyitaw";
    $country = "Myanmar";

    echo isset($city) ? "yes" : "no" ;
    echo "<br/>";

    echo $city . "<br/>";
    echo $capital . "<br/>";
    echo $country . "<br/>";

    unset($city);
    unset($capital,$country);

    echo $city . "<br/>"; 
    echo $capital . "<br/>";
    echo $country . "<br/>";



?>