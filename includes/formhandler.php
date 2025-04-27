<?php

    // var_dump($_SERVER['REQUEST_METHOD']);
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $firstname= htmlspecialchars($_POST['firstname']); // take the data and convert into html entities
        $lastname= htmlspecialchars($_POST['lastname']);
        $pet= htmlspecialchars($_POST['pet']);
        // htmlentities()

        if(empty($firstname)){
            exit();
            header("Location: ../form.php");
        }

        echo "These are the data, that the user submitted:";
        echo "<br/>";
        echo $firstname;
        echo "<br/>";
        echo $lastname;
        echo "<br/>";
        echo $pet;

        header("Location: ../form.php"); // this is use not visited the formhandler page
    }
    else{
        header("Location: ../form.php");
    }
?>