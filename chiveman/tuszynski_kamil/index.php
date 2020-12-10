<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tuszynski_kamil.php"  method="GET">
<input type="text" name="name" placeholder="imię" autofocus><br><br>
<input type="text" name="surname" placeholder="nazwisko"><br><br>
<input type="number" name="a" placeholder="a"><br><br>
<input type="number" name="b" placeholder="b"><br><br>
<input type="submit" value="Wyślij dane">
<input type="number" name="flag" value="1" style="display:none;"> <!-- normalnie byłoby zero ale tutaj musiałem 1 bo nie zdążyłem naprawić hiperłąćza-->
</form>
</body>
</html>