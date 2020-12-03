<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pl" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #namecall, #czas {
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

    $name = $_POST["name"];
    $surname = $_POST["surname"];


    $name = substr($name, 0, 10); //długość $imie do 10 znaków


    echo ucwords(strtolower(trim($name))), '_';   //pierwsza litera duża, brak pustych
    echo ucwords(strtolower(trim($surname))), '_'; //pierwsza litera duża, brak pustych
    echo 'gr_3';
?>
</div><br>


<?php

setlocale(LC_TIME, "PL");
$czas = strftime("%d %B %Y | %A | %T");

?>


<table>
<tr>
    <td colspan=2 id="czas">Data: <?php echo $czas ?></td>
</tr>
<tr>
    <td>Klasa: 3B3T gr_3</td>
    <td><a href="function.php">wzór</a></td>
</tr>
</table><br>

<?php
require_once 'function.php';
echo formula($_POST['a'],$_POST['b']);
?>



</body>
</html>