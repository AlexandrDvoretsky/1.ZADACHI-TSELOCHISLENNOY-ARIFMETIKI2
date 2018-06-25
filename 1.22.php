<?php
  // 1.22 Натуральное число N разложить на простые множители.

  $n=360;
  $key=true;
  $i=2;
  while ($key) {
    if($n%$i==0)
    {
      echo "$n | $i<br>";
      $n=$n/$i;
    }
    else {
      if($n>1) $i++;
      else $key=false;
    }
  }
?>
