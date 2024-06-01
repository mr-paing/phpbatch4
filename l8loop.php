    <?php
    // => PHP Looping 

    // for 
    // foreach 
    // while 
    // do..while 


    $colorsones = ["red","green","blue","white","black","gray","pink"]; //indexed array 
    echo count($colorsones); // 
    echo "<br/>";
    var_dump($colorsones);
    echo "<br/>";
    $coloroneskey = array_keys($colorsones); // use to print key only
    // echo $coloroneskey; //Error 
    echo "<br/>";
    var_dump($coloroneskey);

    echo "<br/>";

    echo "<pre>".print_r($coloroneskey,true)."</pre>";

    echo "<br/>";

    for($i = 0; $i < count($colorsones); $i++){
        // echo "Thi is index array or manual array by forloop = index key is ". $i . " value is = ".$colorsones[$i] . "<br/>";
        echo "Thi is index array or manual array by forloop = index key is ". $coloroneskey[$i] . " value is = ".$colorsones[$i] . "<br/>";
    }

echo "<hr/>";

    foreach($colorsones as $colorsone){
        echo "This is indexed array or manual array by foreach = " . $colorsone . "<br/>";
    };

    foreach($colorsones as $key=>$colorsone){
        echo "This is array or manual array by foreach = index key is ".$key . "and value is ". $colorsone. "<br/>";
    };

echo "<hr/>";

    $x = 0;
    while($x < count($colorsones)){
        // echo $colorsones[$x];
        // $x++;

        // echo "This is array or manual array by while = index key is ".$x . "and value is ". $colorsones[$x]. "<br/>";
        echo "This is array or manual array by while = index key is ".$coloroneskey[$x] . "and value is ". $colorsones[$x]. "<br/>";
        $x++;
    };

echo "<hr/>";


    $y = 0;

    do{

        // echo "This is array or manual array by dowhile = index key is ".$y . "and value is ". $colorsones[$y]. "<br/>";
        echo "This is array or manual array by dowhile = index key is ". $coloroneskey[$y]. "and value is ". $colorsones[$y]. "<br/>";
        $y++;
    }while($y < count($colorsones));



