<?php

$a = $_POST['a'];
$b = $_POST['b'];

function formula($a, $b)
{
    return -$a + (sqrt(pow($b,2)-8*$a))/$a;
}

?>