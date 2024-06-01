<?php

//=> Variables  Scope 
    // (i) Global Variable Scope 
    // (ii) Local Variable Scope 
    // (iii) Static Variable Scope 


    $num1 = 100; //Global Variable 
// php တွင် global scope ကို function (block scope) ထဲတွင်  ေခါ်သုံးလို့မရ // js တွင် ရသည်။
    function funone(){
        echo "Global Variable print in function = $num1";
    }

    funone(); //Global Variable print in function = (no print out $num1 = cuz function will generate an error)

echo "<br/>";

    echo "Global Variable print outside = $num1"; // Global Variable print outside = 100

echo "<br/>";

// local တွင် ေကြငြာထားေသာ variable ကို global တွင် ေခါ်သုံးလို့ မရ ၊ js နှင့်တူသည်

    function funtwo(){
        $num2 = 200; // Local Variable
        echo "Local Variable print in function = $num2";
    }

    funtwo();

echo "<br/>";

    echo "Local Variable print outside = $num2"; //Local Variable print outside = (no print out $num2 , cuz function will generate an error)

// => global keywork

    // global scope တွင် variable ကို local ၌ အသုံးပြုနိုင်ရန် global keywork ကိုသုံးရမည်။ local scope ရှိ variable ကိုလည်း  global တွင် အသုံးပြု၍ ၇နိုင်သည်။

    $num3 = 300;
    $num4 = 400;

    function funthree(){
        // global $num3;
        // global $num4;

        global $num3,$num4;

        global $result;

        $result = $num3 + $num4;

        echo "this is result , print by funthree = $result";
    }

    funthree(); // this is result , print by funthree = 700

    echo "Local Variable print outside = $result"; //Local Variable print outside = 700


echo "<br/>";

// => Super Global variable / $GLOBALS[""]

    //global variable နည်းတူ super globale varaible ကိုလည်း အသုံးပြု၍ ရသည်။
    //သတိထားရန်မှာ ယင်းကို global တွင် ေကြငြာ၍ local scope မှ ေခါ်၍ အသုံးနိုင်သည် ၊ သို့ေသာ် global scope တွင် အသုံးပြု၍ မရနိုင်ပါ။

    $num5 = 500;
    $num6 = 600;

    function funfour(){
        $sum = $num5 + $num6;
        $GLOBALS["sum"] = $GLOBALS["num5"] + $GLOBALS["num6"];
        // echo "This is sum m print by funfour = $num"; //This is sum m print by funfour = (no print)

    }

    funfour();

    echo "Local Variable print outside = $sum"; // Local Variable print outside = 1100


    $num7 = 700;

    function funfive(){
        global $num7;

        $num7++;
        echo $num7;
    }

    funfive(); // 701
    funfive(); // 702
    funfive(); // 703
    funfive(); // 704


    function funsix(){
        $num8 = 800;

        $num8++;
        echo $num8;
    }

    funsix(); // 801
    funsix(); // 801
    funsix(); // 801
    funsix(); // 801
    funsix(); // 801


// => static keywork 
    //  static ကို မသုံးလှျင် တစ်ကြိမ် ၁ ေပါင်းေပးပြိး ထိုအရာကိုပင် overwrite ဖြစ်ေနသည် ၊ invoke လုပ်တိုင်း ၁ တိုးေစလှျင် static ကိုသုံးေပးရမည်။ 
    // static ကို ေအာက်ပါအတိုင်း တိုက်ရိုက် variabe  ေကြငြာေပးရမည်။ ဤ conspect static သည် တစ်ကြိမ် invoke လုပ်ပြီးလှျင် မှတ်ထား၍ ေနာက်တစ်ကြိမ် invoke လှျင် ပထမအကြိမ်နှင့် ေပါင်းေပးသည်။ 

    function funseven(){
        static $num9 = 900;

        $num9++;
        echo $num9;
    }

    funseven(); // 901
    funseven(); // 902
    funseven(); // 903
    funseven(); // 904
    funseven(); // 905

echo "<br/>";

// => passing by reference (pr &)

    // without using (&)
    $num10 = 100;
    function funeight($num10){
        $num10 = 10000;
        echo $num10;
    }

    echo $num10; //100
    funeight($num10); //10000
    echo $num10; //100

echo "<br/>";

    // using with (&) & ကို local ရှိတန်းဘိုးကို global တွင ်effect ဖြစ်ေစရန်သုံး
    $num11 = 110;
    function funnine(&$num11){
        $num11 = 11000;
        echo $num11;
    }

    echo $num11; //100
    funnine($num11); //11000
    echo $num11; //11000 
    echo $num11; //11000

// data passing လုပ်သွားပုံ သတိထားကြည့်
    $name = "aung aung";
    $fullname = "aung aung oo";

    function funten(&$val){
        $val = "su su";
        echo $val;
    }

    echo $name; // aung aung;
    funten($name); // su su (ေပးထားေသာ parameter မတူေသာ်လည်း pr = & သည် အလုပ်ဖြစ်သည်။ )
    echo $name; // su su 
    echo $name; // su su
    echo $name; // su su

    echo $fullname;




?>