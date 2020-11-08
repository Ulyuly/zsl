<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    poczatek pliku
    <?php
include '3_1_file.php';
include_once '3_1_file.php';

echo '<br>require<br>';
require '3_1_file.php';
require_once '3_1_file.php';

     ?>
     koniec pliku
  </body>
</html>
