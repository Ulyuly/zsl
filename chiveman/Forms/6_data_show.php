<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane z formularza</h4>
    <?php

//echo '<pre>', print_r($_GET), '</pre>';

$pass= $_GET['pass'];
$color= $_GET['color'];
switch ($color) {
    case 'r':
        $color = 'czerwony';
    break;

    case 'b':
        $color = 'niebieski';
    break;

    case 'g':
        $color = 'zielony';
    break;
}

if (isset($_GET['regulamin'])){
    $reg= 'Regulamin zatwierdzony';}
    
else {
    $reg= 'Proszę zatwierdzić regulamin';
}


echo <<<DATA
    Login: $_GET[login] <br>
    Pass: $_GET[pass] <br>
    Ulubiony kolor: $color <br>
    Status regulaminu: $reg <br>
DATA;

echo '<hr>';
?>
</body>
</html>