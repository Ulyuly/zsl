<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pl" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #namecall, .czas {
        font-weight: bold;
    }

    table {
        border-collapse: collapse;
    }

    td {
        padding: 5px;
        text-align: center;
        border: 1px solid black;
    }
    </style>
</head>
<body>

<div id="namecall">
<?php

    $name = $_GET["name"];
    $surname = $_GET["surname"];


    $name = substr($name, 0, 8); //długość $imie do 8 znaków


    echo ucwords(strtolower(trim($name))), '_';   //pierwsza litera duża, brak pustych
    echo ucwords(strtolower(trim($surname))), '_'; //pierwsza litera duża, brak pustych
    echo 'gr_4';
?>
</div><br>


<?php

setlocale(LC_TIME, "PL");
$czas = strftime("godzina: %T | %d %B %Y ");
$dzien = strftime("Dzień tygodnia: %A");

?>


<table>
<tr>
    <td>Klasa: 3B3T gr_4</td>
    <td><a href="<?php echo "./tuszynski_kamil.php?name=$name&surname=$surname&a=$a&b=$b$flag=1;" ?>">wzór</a></td>
</tr>
<tr>
    <td class="czas">Data: <?php echo $czas ?></td>
    <td class="czas"><?php echo $dzien ?></td>
</tr>
</table><br>

<?php 

if ($_GET['flag'] == 1) {
require_once 'function.php';
echo formula($_GET['a'],$_GET['b']);
}
?>

</body>
</html>