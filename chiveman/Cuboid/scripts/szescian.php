<?php
$a=$_POST['a'];

function pole($a){
    return round(6*$a, 2);
}

function objetosc($a){
    return round(pow($a,3),2);
}

function przekatna($a){
    return round($a*sqrt(3),2);
}

function promienwpisany($a){
    return round($a/2,2);
}

function promienopisany($a){
    return round($a*sqrt(3)/2,2);
}

?>