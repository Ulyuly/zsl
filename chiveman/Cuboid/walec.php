<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walec</title>
</head>
<body>
    <h4>Walec</h4><br>
    <img src="obraz4.jpg"/>
    <hr>
    <h4>Dane</h4>
    <form method="post">
        <input type="number" name="r" placeholder="r"><br><br>
        <input type="number" name="h" placeholder="h"><br><br>
        <input type="submit" name="wynik" value="Oblicz">
    <form>
    <?php
        if(!empty($_POST['r']) && !empty($_POST['h'])){
            if ($_POST['r'] <= 0 || $_POST['h'] <= 0){
            echo '<h4>Dane podane w formularzu muszą być liczbami dodatnimi!</h4>';
            }
            else {
                require_once './scripts/walec.php';
                echo '<ul>';
                    echo '<li>Pole podstawy: ',polepodstawy($_POST['r'],$_POST['h']),'cm<sup>2</sup></li>';
                    echo '<li>Pole powierzchni bocznej: ',polepowbocznej($_POST['r'],$_POST['h']),'cm<sup>2</sup></li>';
                    echo '<li>Pole powierzchni całkowitej: ',polepowcalkowitej($_POST['r'],$_POST['h']),'cm<sup>2</sup></li>';
                    echo '<li>Objętość: ',objetosc($_POST['r'],$_POST['h']),'cm<sup>3</sup></li>';
                echo '<ul>';
            }
        }
        else{
            if(isset($_POST['r']) && isset($_POST['h'])){
                if($_POST['r'] == 0 || $_POST['h'] == 0){
                    echo '<h4>Dane w formularzu nie mogą być 0!</h4>';
                }
            }
        }
    ?>
    <br><br>
    <button><a style="text-decoration: none;" href="3_zadanie_formularze_geometria.php">Powrót do strony głównej</a></button>
</body>
</html>