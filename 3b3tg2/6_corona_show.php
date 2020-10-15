<?php

$name=$_GET['name'];

$sex=$_GET['sex'];


$eyecolor=$_GET['eyecolor'];
switch ($eyecolor) {
    case 'zielone':
        $sex = 'kobieta';
    break;

    case 'm':
        $sex = 'mezczyzna';
    break;
}

echo <<<DATA
    Name: $name <br>
    Sex: $sex <br>
    Kolor oczu:  <br>
    Check:  <br>
    Describe:
DATA;
?>