<?php

//Associative array

$colors = array ("red"=>"First","green"=>"Second","blue"=>"Third");

// foreach ($colors as $color){
//     echo $color;
//     $color++;
// }

foreach ($colors as $color =>$value){
    echo "Index Name = $color and Position $value";
}

?>