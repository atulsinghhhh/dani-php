<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is a prargraph</p>
    <?php
        echo "This is also a paragraph <br/>"
    ?>

    <!-- variables and data type -->
    <?php
    // Sclar types(conatins one value)
        $name= "Atul";
        echo $name;
        $string="kashvi";
        $int=30;
        $float=22.3;
        $bool=false;

        // Array type
        $array=array("atul","kashvi","atvi");
        // object type
        // $object=new Car();

        $name; // default type 
        $test=$name;

        // Pre Defined variable or super gobal

        // echo $_SERVER["DOCUMENT_ROOT"];
        // echo "<br/>";
        // echo $_SERVER["PHP_SELF"];
        // echo "<br/>";
        // echo $_SERVER["SERVER_NAME"];
        // echo "<br/>";
        // echo $_SERVER["REQUEST_METHOD"];
        // echo $_FILES['name']; // uploaded the files
        // echo $_COOKIE["name"]
        // $_SESSION["username"]="Atvi";
        // echo $_SESSION["username"]



        // echo $_GET["name"];
        // echo "<br/>";
        // echo $_GET["wife"];

        // echo $_REQUEST["name"];

    ?>
    <p>Hi! My name is <?php echo $test ?>, and I'm learning 
    PHP! </p>

</body>
</html>