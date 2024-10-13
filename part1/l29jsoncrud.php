<?php
    $getdatas = file_get_contents('l29studentdb.json');
    $datasde = json_decode($getdatas,true);
    // echo "<pre>".print_r($datasde,true)."</pre>";


// => Read

    // foreach($datasde as $datas){
    //     // echo "<pre>".print_r($datas,true)."</pre>";

    //     foreach($datas as $key=>$data){
    //         echo $key . " = " . $data . "<br/>";
    //     }

    //     echo '<hr/>';
    // }

// -------------------------------------------------------------------


// => Create 

    $newdatas = [
        [
            "id"=>8,
            "name"=>"lin lin",
            "city"=>"mandalay"
        ],
        [
            "id"=>9,
            "name"=>"Chit thu wai",
            "city"=>"yangon"
        ],
        [
            "id"=>10,
            "name"=>"honey nway oo",
            "city"=>"yangon"
        ]
    ];

    // sudo chmod 777 -R l29studentdb.json 

    // foreach($newdatas as $newdata){
    //     array_push($datasde,$newdata);
    //     file_put_contents('./l29studentdb.json', json_encode($datasde));
    // };

// -------------------------------------------------------------------

// => Update 
    // foreach($datasde as $key=>$datas){
    //     // echo $datas;
    //     // echo "<pre>".print_r($datas,true)."</pre>";
    //     // echo $key; // 0 to 9 of index

    //     // echo "<pre>".print_r($datasde[$key],true)."</pre>";
    //     // echo $datas["id"]; // 1 to 10 of id
        

    //     if($datas['id'] === 9){
    //         // id number 9 = index number 8 
    //         // $datasde[$key]['name'] = "chit hsu wai";

    //         $datasde[8]['name'] = "sandar";
    //     }

    // }

    // // making save 
    // file_put_contents('./l29studentdb.json',json_encode($datasde));


// -------------------------------------------------------------------

// => Delete 
    $idxs = [];

// select index to delete
    foreach($datasde as $key=>$datas){
        // echo "<pre>".print_r($datas,true)."</pre>";
       if($datas["id"] === 10){ // 10 is id number
        $idxs[] = $key; // index number = 9
       }
    }

    // delete value from array

    foreach($idxs as $idx){
        unset($datasde[$idx]); 
    }

    // do save
    file_put_contents('l29studentdb.json',json_encode($datasde));


    foreach($datasde as $datas){
        // echo "<pre>".print_r($datas,true)."</pre>";

        foreach($datas as $key=>$data){
            echo $key . " = " . $data . "<br/>";
        }

        echo '<hr/>';
    }



?>
<!-- 
[
    {
        "id":1,
        "name":"su su",
        "city":"Mandalay"
    },
    {
        "id":2,
        "name":"nu nu",
        "city":"Mandalay"
    },
    {
        "id":3,
        "name":"yu yi",
        "city":"Mandalay"
    },
    {
        "id":4,
        "name":"Aimg Aung",
        "city":"Mandalay"
    },
    {
        "id":5,
        "name":"Kyaw Kyaw",
        "city":"Mandalay"
    },
    {
        "id":6,
        "name":"Hla Hla",
        "city":"Mandalay"
    },
    {
        "id":7,
        "name":"Mya Mya",
        "city":"Mandalay"
    }
] -->

<!-- $newdatas = [
        [
            "id"=>8,
            "name"=>"lin lin",
            "city"=>"mandalay"
        ],
        [
            "id"=>9,
            "name"=>"Chit thu wai",
            "city"=>"yangon"
        ],
        [
            "id"=>10,
            "name"=>"honey nway oo",
            "city"=>"yangon"
        ]
    ] -->