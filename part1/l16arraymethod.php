<?php

// => array_combine(key,value) Function 

    $name = array("aung aung","su su","kyaw kyaw","hla hla");
    $age = [30,25,35,40];

    $result = array_combine($name,$age);
    echo "<pre>".print_r($result,true)."</pre>" , "<br/>"; // ( [aung aung] => 30 [su su] => 25 [kyaw kyaw] => 35 [hla hla] => 40)

    echo $result["kyaw kyaw"] , "<hr/>"; // 35



// => count(array) function
    $vehicles = ["toyoto","ford","audi","mazda","suzuki","ford","mazda","bmw"];
    echo count($vehicles) , "<hr/>"; // 8 = start with 1


//=> array_count_value(array) Function
    $cars = ["toyoto","ford","audi","mazda"];
    echo "<pre>".print_r(array_count_values($cars),true)."</pre>" , "<br/>"; // ([toyoto] => 1 [ford] => 1 [audi] => 1 [mazda] => 1 )

    $brands = ["toyoto","ford","audi","mazda","suzuki","ford","mazda","bmw","Toyota"];
    echo "<pre>".print_r(array_count_values($brands),true)."</pre>" , "<hr/>"; // ( [toyoto] => 1 [ford] => 2 [audi] => 1 [mazda] => 2 [suzuki] => 1 [bmw] => 1 [Toyota] => 1 )
    




// => array_chunk(array,length) function 
// => array_chunk(array,length,preservekey) 
// perservekey = true / false (false is default)
    $couples = ["aung aung","su su","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","aye aye"];

    $result1 = array_chunk($couples,2);
    echo "<pre>".print_r($result1,true)."</pre>" , "<br/>";
    echo $result1[0][1] , "<br/>"; // su su


    $result2 = array_chunk($couples,2,true);
    echo "<pre>".print_r($result2,true)."</pre>" , "<br/>"; // 0 1 2 3 4 5 6 7


    $result3 = array_chunk($couples,2,false);
    echo "<pre>".print_r($result3,true)."</pre>" , "<hr/>"; // 01 01 01 01 01




// => array_diff(array1,array2,.........) function 
// Note :: we don't need to consider any indx or keyname , it check just value 

    $colors1 = ["red","green","blue","pink"];
    $colors2 = ["red","blue","pink","silver"];
    $colors3 = ["green","blue","orange","violet"];

    echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>" , "<br/>"; // ( [1] => green [2] => blue )    
    echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>" , "<br/>"; // // ( [3] => silver )
    echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>" , "<br/>"; //()


    $col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    $col2 = ["e"=>"red","f"=>"green","g"=>"black"];
    echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>" , "<hr/>";


// => array_diff_assoc(array1,array2,.........) function 
// Note :: we need to consider any keyname and value (just for assoc array)
    $col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
    $col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
    echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>" , "<hr/>";


// => array_diff_key(array1,array2,.........) function 
// Note :: we need to consider any value , check only key
    $col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green","f"=>"pink"];
    $col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
    echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>" , "<hr/>";



// find same value
//=> array_intersect(array1,array2,.........) function 
// Note :: we need to consider any keyname
    $num1 = [10,20,30,60,70,80];
    $num2 = array(10,20,30,40,50,90,80);
    echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>" , "<br/>";


    $col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    $col2 = ["a"=>"red","f"=>"green","d"=>"orange"];
    echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>" , "<hr/>";



// => array_fill(startindex,count,value) function ;
    echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_fill(2,5,"blue"),true)."</pre>" , "<hr/>";


// array_fill_keys(keys,value) function 
    $keys = ["a","b","c","d"];
    $values = ["red","green","blue","pink"]; 
    echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>" , "<hr/>";
    echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>" , "<hr/>"; // key တစ်ခုထဲတွင် value 4 ခုစီ ဝင်သွားသည်။




// => array_key_exists(key,array) function (just for assoc array)
    $operators = ["mpt"=>"ftth","ooredoo"=>"broadband"];

    if(array_key_exists("mpt",$operators)){
        echo "Key exists";
    }else{
        echo "Key does't exists";
    }


    echo "<hr/>";


// => array_merge() function   
    $arr1 = ["red","green"];
    $arr2 = array("blue","yellow");
    $arr3 = ["orange","violet"];
    echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>" , "<br/>";
    echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>" , "<hr/>";

// => array_keys(array)
// => array_keys(array,value) Function 
// => array_keys(array,value,strict)

    $phones = ["mpt"=>"ftth","ooredoo"=>"broadband","telenor"=>"wifi"];

    echo "<pre>".print_r(array_keys($phones),true)."</pre>" , "<hr/>"; // Array([0] => mpt [1] => ooredoo [2] => telenor)
    echo array_keys($phones)[1] , "<br/>";

    echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>" , "<hr/>";
    echo array_keys($phones,"broadband")[0] , "<hr/>";


    $numbers = [10,20,30,"10"];
    echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>" , "<hr/>";
    echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>" , "<hr/>";

    echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>" , "<hr/>";
    echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>" , "<hr/>";

    echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>" , "<hr/>";
    echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>" , "<hr/>";




// => array_map(callback,array1,array2,array3.......) Function

    $males = ['tun tun','aung aung','kyaw kyaw','thura','zaw zaw'];
    $females = ['hal hla ','su su ','nu nu','yu yu','thida'];

    function genderone($name){
        return ("Mr. ".$name);
    }

    function gendertwo($males,$females){
        return ($males. " & ".$females);
    }

    echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>" , "<hr/>";
    echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>" , "<hr/>"; 


// => sort(array) function

    $cars = ["vilov","bmw","toyota","mazda","suzuki"];
    sort($cars);
    echo "<pre>".print_r($cars,true)."</pre>" , "<hr/>"; 

    $numbers = [10,50,"80",90,35,"100",130,"250",70];
    sort($numbers);
    echo "<pre>".print_r($numbers,true)."</pre>" , "<hr/>"; 


 // => array_multisort(array) function

    $carbrands = ["vilov","bmw","toyota","mazda","suzuki"];
    array_multisort($carbrands);
    echo "<pre>".print_r($carbrands,true)."</pre>" , "<hr/>"; 

    $luckynumbers = [10,50,"80",90,35,"100",130,"250",70];
    array_multisort($luckynumbers);
    echo "<pre>".print_r($luckynumbers,true)."</pre>" , "<hr/>"; 

// sort and array_multisort are same



// => array_reverse(array) function

    $vehicles = ["vilov","bmw","toyota","mazda","suzuki"];
    sort($vehicles);
    echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>" , "<hr/>"; 

    $winnumbers = [10,50,"80",90,35,"100",130,"250",70];
    sort($winnumbers);
    echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>" , "<hr/>";



// => array_pad(array,length,value) Function 

    $colors = ["red","green"];
    echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>" , "<hr/>"; 



// => array_reduce(array,callback,initial) function
    $nums = [10,"20",30];
    function calfun($total,$val){
        return $total += $val ;
    }

    echo array_reduce($nums,"calfun",0) , "<hr/>"; // 60
    // echo array_reduce($nums,"calfun",2); // 62


// => array_search(value,array) Function
    $myarrs = ["a","b","c","d","e"];
    echo array_search("d",$myarrs) , "<hr/>"; //3

    $myarrs = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
    echo array_search("green",$myarrs) , "<hr/>"; //b


// => array_pop(array) Funciton;
    $colors = ["red","green","blue"];
    array_pop($colors);
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 


// => array_shift(array) function ;
    $colors = ["red","green","blue"];
    array_shift($colors);
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>";


    $colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet"];
    array_shift($colors);
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>";



// => array_unshift(array,value1,value2,value3,........) Function 
    $colors = ["red","green","blue"];
    array_unshift($colors,"silver","violet");
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 

    $colors = ["0"=>"red","1"=>"green","2"=>"blue"];
    array_unshift($colors,"silver","violet");
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 

    $colors = ["a"=>"red","b"=>"green","c"=>"blue"];
    array_unshift($colors,"silver","violet");
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 


// => array_push(array,value1,value2,value3,........) Function 
    $colors = ["red","green","blue"];
    array_push($colors,"silver","violet");
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 

    $colors = ["0"=>"red","1"=>"green","2"=>"blue"];
    array_push($colors,"silver","violet");
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 

    $colors = ["a"=>"red","b"=>"green","c"=>"blue"];
    array_push($colors,"silver","violet");
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 


    // => array_slice(array,offset/index) Function 
    // => array_slice(array,offset/index,length) Function 
    // => array_slice(array,offset/index,length,preserve) Function 

// Note:: device array , and out put array
    $candycolors = ["red","green","blue","yellow","pink"];
    echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>" , "<hr/>"; 
    echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>" , "<hr/>"; 

    echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>" , "<hr/>"; 
    echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>" , "<hr/>"; 
    echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>" , "<hr/>";
    
    echo "<pre>".print_r(array_slice($candycolors,2,5,false),true)."</pre>" , "<hr/>"; // false is default
    echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>" , "<hr/>"; // true change


// array_splice(array,index) Function 
// array_splice(array,index,length) Function;
// array_splice(array,indexlength,array) Function;
$shirtcolors = ["red","green","blue","yellow","pink"];
echo "<pre>".print_r(array_slice($shirtcolors,0),true)."</pre>" , "<hr/>"; 
echo "<pre>".print_r(array_slice($shirtcolors,2),true)."</pre>" , "<hr/>"; 

echo "<pre>".print_r(array_slice($shirtcolors,0,2),true)."</pre>" , "<hr/>"; 
echo "<pre>".print_r(array_slice($shirtcolors,2,2),true)."</pre>" , "<hr/>"; 
echo "<pre>".print_r(array_slice($shirtcolors,2,5),true)."</pre>" , "<hr/>";


$males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
$females = ["su su","yu yu","nu nu"];
// array_splice($males,0,2,$females);
// echo "<pre>".print_r($males,true)."</pre>" , "<hr/>";

// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,true)."</pre>" , "<hr/>";


array_splice($males,1,3,$females);
echo "<pre>".print_r($males,true)."</pre>" , "<hr/>";


// =>array_sum(array) function
$nums = [10,20,30,40,50];
echo array_sum($nums) , "<hr/>"; // 150

$nums = [10,20,30,"40",-50];
echo array_sum($nums) , "<hr/>"; // 50

$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3];
echo array_sum($nums) , "<hr/>"; // 60.8



// array_unque();
$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>" , "<hr/>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
echo "<pre>".print_r(array_unique($colors),true)."</pre>" , "<hr/>";



// useful [note different between unset & array_values]
// => unset(arrayindex) Function and array_values(array)
    $colors = ["red","green","blue"];
    unset($colors[1]);
    echo "<pre>".print_r($colors,true)."</pre>" , "<hr/>"; 

    $colorOne = ["red","green","blue"];
    unset($colorOne[1]);
    echo "<pre>".print_r(array_values($colorOne),true)."</pre>" , "<hr/>";


    $colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet","e"=>"pink"];
    // echo "<pre>".print_r(array_values($colors),true)."</pre>" , "<hr/>";

    $infos = ["name"=>"aung aung","age"=>20,"city"=>"yangon"];
    unset($infos["age"]);
    echo "<pre>".print_r(array_values($infos),true)."</pre>" , "<hr/>";



// => array_walk(array,callbackfunction,parameter) Function [making looping for fast]
    $colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"pink","e"=>"violet"];

    function myfunone($val,$key){
        echo "Key is = $key and Value is $val.";
    }
    array_walk($colors,"myfunone"); // Key is = a and Value is red.Key is = b and Value is green.Key is = c and Value is blue.Key is = d and Value is pink.Key is = e and Value is violet.

    echo "<hr/>";
    
    function myfuntwo($val,$key,$p){
        echo "Key is = $key and Value is $val $p.";
    }

    array_walk($colors,"myfuntwo","colour"); // Key is = a and Value is red colour.Key is = b and Value is green colour.Key is = c and Value is blue colour.Key is = d and Value is pink colour.Key is = e and Value is violet colour.

    echo "<hr/>";

// using passing by refference
    function myfunthree(&$val){
        // $val = "orange";
        // return $val = "orange";

        return $val;
    }

    array_walk($colors,"myfunthree");
    echo "<pre>".print_r(array_values($colors),true)."</pre>" , "<hr/>"; //


    
// => compact(var1,var2,var3) function 

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,true)."</pre>" , "<hr/>";




// range(start,end) function ;
// rande(start,end,step) function

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>", "<hr/>";

$num2 = range(0,50,10);
echo "<pre>".print_r($num2,true)."</pre>", "<hr/>";

$num3 = range("a","z");
echo "<pre>".print_r($num3,true)."</pre>", "<hr/>";

$num4 = range("f","a");
echo "<pre>".print_r($num4,true)."</pre>", "<hr/>";




// => sizeof(array) Function
    $colors = ["red","green","blue","yellow","pink"];
    echo sizeof($colors) , "<hr/>";


// => current() , pos() , next(), prev() , end(), reset()
    $students = ["aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw"];
    // echo current($students), "<hr/>";  // aung aung
    // echo pos($students), "<hr/>";  // aung aung

    // echo current($students), "<hr/>"; // aung aung
    // echo next($students), "<hr/>"; // maung maung
    // echo current($students), "<hr/>"; // aung aung
    // echo next($students), "<hr/>"; // zaw zaw
    // echo prev($students), "<hr/>"; // maung maung
    
    echo end($students), "<hr/>"; // kyaw kyaw
    echo current($students), "<hr/>"; // kyaw kyaw
    echo prev($students), "<hr/>"; // tun tun

    echo reset($students), "<hr/>"; // aung aung
    echo current($students), "<hr/>"; // aung aung



// => serialize(), unserialize() Function 
    $staffs = [
        ["aung aung","maung maung","kyaw kyaw","tun tun","zaw zaw"],
        ["su su","yu yu","nu nu","aye aye","hla hla"]
    ];

    echo "<pre>".print_r($staffs,true)."</pre>" , "<hr/>"; // 

    $seriadatas = serialize($staffs);
    echo $seriadatas  , "<hr/>";
    var_dump($seriadatas) ;
    
    echo "<hr/>";

    $unseriadatas = unserialize($seriadatas);
    echo "<pre>".print_r($unseriadatas,true)."</pre>" , "<hr/>"; //






?>
