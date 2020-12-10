<?php

$a = $_GET['a'];
$b = $_GET['b'];

function formula($a, $b)
{
    return ($a+2)/sqrt(pow($b, 2)+8*$a);  
}

?>