<?php
  //wersja PHP
  echo PHP_VERSION, '<hr>';
  //echo phpinfo();
  $pow = 2**8;
  echo$pow, '<br>'; //256

  echo 'a', 'b', 'c'; //abc
  echo '<br>';
  echo 'd'. 'e' . 'f'; //a+b+c => abc
  echo '<br>';
  // operatory bitowe
  // and &, or |, xor ^, not ~, <<, >>


  $x =0b1010;
  echo "$x<br>";
  $x = $x <<2; //101000(2) 8+32
  echo "$x<br>";


  $x = $x >> 1; //10100 => 4+16
  echo "$x<br>";

  // porównanie <=>
     $x=10;
     $y=20;
     echo $x <=> $y , '<br>';
     $result = $x <=> $y;
     echo $result;
  ?>