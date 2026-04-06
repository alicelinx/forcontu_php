<?php

  $num1 = 41;
  $num2 = 2.1;
  $intNum2 = (int)$num2;

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Activity 4.1a - Introduction to PHP</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h3>Activity 4.1a - Introduction to PHP</h3>
     
    <?php 
      echo "The result of adding " . $num1 . " and " . $num2 . " is " . ($num1 + $num2) . ".<br>";
      echo "The result of subtracting " . $num1 . " and " . $num2 . " is " . ($num1 - $num2) . ".<br>";
      echo "The result of multiplying " . $num1 . " and " . $num2 . " is " . ($num1 * $num2) . ".<br>";
      echo "The result of dividing " . $num1 . " and " . $num2 . " is " . ($num1 / $num2) . ".<br>";
      echo "The result of the remainder of dividing " . $num1 . " and " . $intNum2 . " is " . ($num1 % $intNum2) . ".";
    ?>
    
  </body>
  
</html>