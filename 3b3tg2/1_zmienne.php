<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienna</title>
</head>
<body>
    <?php

    $name='Janusz';
    $surname='Nowak';
     
    echo " Imię: $name<br>";
    // konkatenacja . 
    echo " Nazwisko: $surname".'<hr>';
    

//typy danych
//boolean
$prawda = true;
$fałsz = false;
echo $prawda; //1
echo $fałsz, '<br>';//nic nie wyświetli


// integer

$bin = 0b1010; //10
$oct = 0104512; //8
$dec = 203511; //20
$hex = 0xBCDEF; //11

echo $hex,'<br>';
echo $bin,'<br>';
echo $oct,'<br>';
echo $dec,'<hr>';

// składnia heredoc

$name="Krystyna";
$text = <<< ETYKIETA
 Imię: $name <br>
 Nazwisko: $surname <hr>
ETYKIETA;

 echo $text;
 echo <<< E
    Heredoc 2<br>
    Imię: $name<hr>
E;


// składnia nowdoc

echo <<< "E"
nowdoc <br>
Imię: $name<hr>
E;

$city='Poznań';
echo "Nazwa zmiennej: \$city<br>
wartość: $city";


    ?>
</body>
</html>