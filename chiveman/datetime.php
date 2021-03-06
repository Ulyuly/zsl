<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-32" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Documents</title>
    <style>
      #three{
        width: 150px;
      }
      #four{
        width: 350px;
      }
    </style>
  </head>
  <body>
    <?php 
      $today = getdate();

      setlocale(LC_TIME, "PL");
      $one = strftime("%Y-%m-%d");
      $two = strftime("%I:%M");
      $three = strftime("%A");
      $four = strftime("%d %B %Y, %T | %A");

      
      function EndOfYear() {
        $data = getdate();
        if($data['year'] % 4 == 0) {
          return 366 - ((int)$data['yday'] + 1);
        } else {
          return 365 - ((int)$data['yday'] + 1);
        }
      }
      function DaysInOneYear() {
        $data = getdate();
        if($data['year'] % 4 == 0) {
          return "366 dni (rok przestępny)";
        } else {
          return "365 dni";
        }
      }

    ?>
    <h2>Data i czas</h2>

    <input id="one" type="date" value="<?php echo $one ?>"><br><br>
    <input id="two" type="time" value="<?php echo $two ?>"><br><br>
    <input id="three" type="text" value="<?php echo $three ?>"><br><br>
    <input id="four" type="text" value="<?php  echo $four ?>"><br><br>

    <ul>
    <li>Ilość dni w roku: <?php echo DaysInOneYear() ?>
    <li>Dzień roku: <?php echo $today['yday'] + 1 ?>
    <li>Numer tygodnia w roku: <?php echo date('W') ?>
    <li>Dni do końca roku: <?php echo EndOfYear() ?>
  </body>
</html>
