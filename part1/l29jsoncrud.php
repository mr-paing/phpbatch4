<?php
    $getdatas = file_get_contents('l29studentdb.json');
    $datasbe = json_decode($getdatas,true);
    // echo "<pre>".print_r($datasbe,true)."</pre>";

    foreach($datasbe as $datas){
        // echo "<pre>".print_r($datas,true)."</pre>";

        foreach($datas as $key=>$data){
            echo $key . " = " . $data . "<br/>";
        }

        echo '<hr/>';
    }


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
    ]

?>