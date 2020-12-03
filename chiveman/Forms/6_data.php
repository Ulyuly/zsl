<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4> Dane użytkownika</h4>
<form action="./6_data_show.php" method="get">
<input type="text" name="login" placeholder="Login" autofocus><br><br>
<input type="password" name="pass" placeholder="Hasło"><br>
<h4>Ulubiony kolor</h4>
<input type="radio" name="color" value="r" checked>Czerwony
<input type="radio" name="color" value="b">Niebieski
<input type="radio" name="color" value="g">Zielony 
<br><br>
<input type="checkbox" name="regulamin">Zatwierdzenie regulaminu
<br><br>
<input type="submit" value="Wyślij dane">

</form>
    
</body>
</html>