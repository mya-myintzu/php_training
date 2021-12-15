<?php
 $n=6;
  for($x=0; $x<$n; $x++) {
    for($y=$x; $y<$n; $y++) {
      echo "&nbsp &nbsp";
    }
    for($y=0; $y<$x-1; $y++) {
      echo "*  ";
    }
    for($y=0; $y<$x; $y++) {
      echo "*  ";
    }
      echo "<br>";
  }

  for($x=0; $x<$n; $x++) {
    for($y=0; $y<$x; $y++) {
        echo "&nbsp &nbsp";
    }
    for($y=$x; $y<$n; $y++) {
        echo "* ";
    }
    for($y=$x; $y<$n-1; $y++) {
        echo "* ";
    }
    echo "<br>";
  }
  
 ?>