<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sześcian</title>
</head>
<body>
    <h4>Sześcian</h4><br>
    <img src="obraz2.jpg"/>
    <hr>
    <h4>Dane</h4>
    <form method="post">
        <input type="number" name="a" placeholder="a"><br><br>
        <input type="submit" name="wynik" value="Oblicz">
    <form>
    <?php
        if(!empty($_POST['a'])){
            if ($_POST['a'] <= 0){
            echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
            }
            else {
                require_once './scripts/szescian.php';
                echo '<ul>';
                    echo '<li>Pole: ',pole($_POST['a']),'cm<sup>2</sup></li>';
                    echo '<li>Objętość: ',objetosc($_POST['a']),'cm<sup>3</sup></li>';
                    echo '<li>Dlugosc przekatnej: ',przekatna($_POST['a']),'cm</li>';
                    echo '<li>Promień kuli wpisanej w sześcian: ',promienwpisany($_POST['a']),'cm</li>';
                    echo '<li>Promień kuli opisanej w sześcian: ',promienopisany($_POST['a']),'cm</li>';
                echo '<ul>';
            }
        }
        else{
            if(isset($_POST['a'])){
                if($_POST['a'] == 0){
                    echo '<h4>Dane w formularzu nie mogą być 0!</h4>';
                }
            }
        }
    ?>
    <br><br><br>
    <button><a style="text-decoration: none;" href="3_zadanie_formularze_geometria.php">Powrót do strony głównej</a></button>
</body>
</html>