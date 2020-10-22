<?php
$text = <<< T
zsl - Zespół
Szkół
Łączności<br>
T;

echo $text;
echo nl2br($text); //wszystkie rzeczy po enterze

echo "<br>";

$name = 'jaNUsZ';
$name = strtolower($name); //wszystkie litery małe
echo $name;
echo "<br>";

$name = 'krysTYna';
echo strtoupper($name); //wszystkie litery duże
echo "<br>";

$name = 'aNNa noWaK';
echo ucwords($name); //pierwsza litera w słowie duża

echo "<br>";
$name = 'aNNa noWaK';
echo ucwords(strtolower($name));


$lorem = <<< LOREM
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Quia molestias eligendi aliquid eveniet quam praesentium impedit mollitia, 
quod laudantium ut saepe itaque ad. Ea sequi 
dolorem adipisci quos inventore deleniti! 
LOREM;

echo "<br>";
//echo $lorem;
$col = wordwrap($lorem, 30, '<br>', true);
echo $col;

//czyszcenie zawartości bufora
ob_clean();

// usuwanie białych znaków
$name = 'Anna';
$name1 = ' Anna ';
echo '<br>Długość zmiennej $name: ', strlen($name);
echo '<br>Długość zmiennej $name1: ', strlen($name1);
echo '<br>Długość zmiennej $name1 bez znaków pustych: ', strlen(trim($name1)); 
echo '<br>Długość zmiennej $name1 bez lewej: ', strlen(ltrim($name1)); 
echo '<br>Długość zmiennej $name1 bez prawej: ', strlen(rtrim($name1)); 

echo '<br>';
echo strlen($name1);
$name1 = trim($name1);
echo '<br>';
echo strlen($name1);
echo '<br>';

$address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
$search = strstr($address, 'tel', true);
echo $search;
echo '  Długość $search: ', strlen($search);
echo '<br>';
$search = strstr($address, 'tel');
echo $search;
echo '  Długość $search: ', strlen($search);

echo '<br>';
echo strstr('zsl@gmail.com', '@');

echo '<br>';
$domain = substr(strstr('zsl@gmail.com','@'),1);
echo $domain;
?>