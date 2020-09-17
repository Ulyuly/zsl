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
     echo '<br>';

     $x=1;
     $y=1;
     
     if($x==$y) {
        echo 'zmienne są równe <br>';
     }
     else {
        echo 'zmienne są różne <br>';
     }
    
   echo gettype($x); //integer
   echo gettype($y); //double

   #######################################

   /* 
   preinkrementacja ++$x
   predekrementacja --$x
   postinkrementacja $x++
   postinkrementacja $x--
   */
   
   echo '<hr>';
   $x=1;
   $x=$x++;
   echo $x; //1
   $x=++$x;
   echo $x; //2
   $y=$x++;
   echo $x; //3
   echo $y; //2
   $y=++$x * 2 -1;
   echo $x; //4
   echo $y; //7


   echo '<hr>';
   $x=2;  
   echo $x++; //2
   echo ++$x; //4
   echo $x;  //4
   $y=$x++;  
   echo $y;  //4
   $y=++$x;
   echo $y;  //6
   echo ++$y; //7

    //operatory rzutowania
    //bool, int, float, string, array, object, unset
   
   $test='123abc';
   $test1=0;
   $test2=20;

   $x=(int)$test;
   echo '<hr>$x<br>';
   echo 'typ danych $x: ',gettype($x);

  ?>