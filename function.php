<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>
    <?php
    // declare(strict_types=1); 

    
    function sayHello($name){
        return "Hello $name";
    }
    // $name="kashvi";
    echo sayHello($name);

    // constant in php


    $name="Atul";
    echo $name;

    define("PI",3.14);

    ?>
</body>
</html>