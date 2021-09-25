<?php

$x=399;

function test(){
    global $x;
    echo $x;
}
test();

?>