<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reverse</title>
</head>

<body>
    <?php
    
    $x = "PHP is my Love!";

    echo strrev($x) ;
    
    ?>
    <br>
    <?php

    define("riaz", "i am a web developer");
    function student(){
        echo riaz;
    };
    student();

   
    // echo riaz;


    ?>
    <br>

    <!-- // same output in another system -->

    <?php
        define("mahmud", "i am a web programmer");
        function islam(){
            // echo riaz;
            return mahmud;
        };
       echo islam();
    
    ?>

</body>

</html>