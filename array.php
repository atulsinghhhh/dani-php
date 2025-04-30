<?php
    /*$tasks=[  // Associative Arrays in PHP
        "lundary"=>"abc",
        "trash"=>"xyz",
        "dishes"=>"cds"
    ];*/
    // echo $tasks["trash"];
    // print_r($tasks);
    // echo count($tasks);
    // sort($tasks);
    // print_r($tasks);

    $fruits=["apple","mongo","grapes"];
    $test=["strawberry","mango"];

    array_push($fruits,"mango");
    // print_r($fruits);

    array_splice($fruits,0,1,$test);
    // print_r($fruits);

    $food=[
        "fruits"=>array("apple","banana","cherry"),
        "meat"=>array("chicken","fish"),
        "vegetables"=>array("cucumber","carrot"),
    ];

    // echo $food["vegetables"][1];

    // Loops
    // $n=7;
    // for($i=0;$i<$n;$i++){ // for loop
    //     echo $i ,"<br/>";
    // }

    // while loop
    // $bool=true;
    // while(!$bool){
    //     print_r("hello world");
    // }

    //  foreach loop

    $fruits=array("Apple","Banana","Mango");
    foreach($fruits as $fruit){
        echo "This is a " .$fruit. "<br/>";
    }

?>