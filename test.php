<?php

    $cities = ["Paris", "Rome", "Marseille"];

    $cities = [
        'ville1' => "Paris",
        'ville2' => "Rome",
        'ville3' => "Marseille",
    ];

    foreach($cities as $key => $city)
    {
        echo "La $key se nomme : $city \n";
    }

    // foreach($cities as $city)
    // {
    //     echo $city . "\n";
    // }




    // $tab = array();
    // $tab = [];

    // $tab1 = ["hello", "world", 3, true, "test", "test1"];

    // foreach($tab1 as $var)
    // {
    //     echo $var . "\n";
    // }

    // $length_of_tab1 = count($tab1);

    // var_dump($length_of_tab1);

    // for($i=0; $i<count($tab1); $i++)
    // {
    //     echo $tab1[$i] . "\n";
    // }

    // $prenom = "riri";
    // $phrase = "Hello! C'est $prenom";
    // $phrase = 'Hello! C\'est ' . $prenom;

    // $heure = "12";

    // if($heure === 12 || $heure == 12)
    // {
    //     echo "c'est le matin";
    // }
    // else 
    // {
    //     echo "ce n'est pas le matin";
    // }



    // if('condition1') 
    // {
    //     // instructions;
    // }
    // else if('condition2')
    // {
    //     // instructions;
    // }
    // else
    // {
    //     // instructions
    // }