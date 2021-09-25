<?php

$cars = array("Mercedes","Toyota","BMW");
$number = array("20","10","30");

rsort($cars);
sort($number);
for($i = 0; $i < 3; $i++){

    echo $cars[$i];

}
for($i = 0; $i < 3; $i++){

    echo $number[$i];

}


?>