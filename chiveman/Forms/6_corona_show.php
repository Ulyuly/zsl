<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableform</title>
</head>
<body>
    

<?php

$name=$_GET['name'];
$sex=$_GET['sex'];
$eyecolor=$_GET['eyecolor'];
$athletic=$_GET['athletic'];

if (isset($_GET['height'])){
    $height= 'Over 6 feet tall';}
    
else {
    $height= 'Under 6 feet tall';
}
if (isset($_GET['weight'])){
    $weight= 'over 200 pounds';}
    
else {
    $weight= 'under 200 pounds';
}



echo <<<DATA
    Name: $name <br>
    Sex: $sex <br>
    Kolor oczu: $eyecolor <br>
    Height: $height <br>
    Weight: $weight <br>
    Athletic abilities: $athletic <br>
DATA;
?>

</body>
</html>