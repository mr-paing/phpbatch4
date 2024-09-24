<?php

// => abs(number) Function
    echo abs(32) , "<hr/>";
    echo abs(-32) , "<hr/>";
    echo abs(32.75) , "<hr/>";
    echo abs(-32.75) , "<hr/>";

// => round(number) Function 
// => round(number,percision) Function 

    echo round(32.64);
    echo round(32.54);
    echo round(32.44);
    echo round(-32.64);
    echo round(32.64365,2); // 32.64
    echo round(32.64765,2); // 32.65

    echo "<br/>";


    // => ceil(number) function 
    echo ceil(32.46); //33
    echo ceil(32.54); //33
    echo ceil(32.44); //33

    // ***Note--
        echo ceil(-32.64); // 32
        echo ceil(-32.34); //32

    
    // => floor(number) function 
    echo floor(32.64); // 32
    echo floor(32.54); // 32
    echo floor(32.44); // 32 

    // **** Note --
     echo floor(-32.64); // 33
     echo floor(-32.34); // 33



// => max(number) function
    echo max(2,4,20,6,8,10) , "<br/>"; //20
    echo max(2,4,20,6,-40,8,10) , "<br/>"; //20
    echo max(2,4,"100",20,6,-40,8,10) , "<br/>"; //100
    echo max([2,4,"100",20,6,-40,8,10]) , "<br/>"; //100


// => min(number) Function 

    echo min(2,4,20,6,8,10) , "<br/>"; //2
    echo min(2,4,20,6,-40,8,10) , "<br/>"; //-40
    echo min(2,4,"100",20,6,-40,8,10) , "<br/>"; //-40
    echo min([2,4,"100",20,6,-40,8,10]) , "<br/>"; //-40


// => pow(base,exponent) Function

    echo pow(2,4) , "<br/>"; // 16
    echo pow(3,4) , "<br/>"; // 8136


// => log(number,base) logarithm Function
    echo log(10,2) , "<br/>"; // 3.3219280948874
    echo log(20,2) , "<br/>"; // 4.3219280948874
    echo log(80,3) , "<br/>"; // 3.9886925350038


// => sqrt(number) Function
    echo sqrt(4) , "<br/>"; // 2
    echo sqrt(9) , "<br/>"; // 3
    echo sqrt(0.81) , "<br/>"; // 0.81
    echo sqrt(-4) , "<br/>"; // NAN


// => rand() Function
    echo rand() , "<br/>";

// => rand(min, max) Function
    echo rand(1000,10000) , "<br/>"; 



// => getrandmax() Function
    echo getrandmax() , "<br/>"; // 2147483647


    $users = ["aung aung","kyaw kyaw","zaw zaw","nu nu","su su","hla hal"];
    echo $users[rand(0,5)] , "<br/>";


// => microtime() Function [a very short interval of time , as 0.01 million of a second]
    echo microtime() , "<br/>"; // တစ်စက္ကန့်၏ 0.01 ပုံ , တစ်ခုခု unique ဖြစ်ေစချင်ေသာအရာတွင်သုံးသည်
    echo microtime(true) , "<br/>";


// => uniqid() Function
    echo uniqid() , "<br/>";


// => number_format(number,decimals) Function
// => number_format(number,decimals,decimal-separator,thousands-separator) Function
    echo number_format(1500,2) , "<br/>"; //1,500.00
    echo number_format(1200000,2,'.',',') , "<br/>"; //1,200,000.00
    echo number_format(1200000,2,',','.') , "<br/>"; //1.200.000,00
    echo number_format(1200000,2,'.','-') , "<br/>"; //1,200,000.00
    echo number_format(1200000,0,'.','-') , "<br/>"; //1-200-000
    




?>