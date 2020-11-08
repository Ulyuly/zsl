<?php
$a=$_POST['a'];
$h=$_POST['h'];
$H=$_POST['H'];

function pole($a,$h){
    return round((pow($a,2)+2*$a*$h),2);
}

function objetosc($a,$H){
    return round((pow($a,2)*$H)/3,2);
}

?>