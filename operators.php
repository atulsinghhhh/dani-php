<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
        // string operator
        $a="Hello";
        $b="World";

        $c=$a . " ". $b;
        // echo $c;

        // control Structure

        $bool=true;
        $a=1;
        $b=3;
        if($a<$b){
            echo "first condition true";
            // if(){} nested condition
        }
        else if($a==$b){
            echo "second condition true";
        }
        else{
            echo "third condition true";
        }
    ?>
</body>
</html>