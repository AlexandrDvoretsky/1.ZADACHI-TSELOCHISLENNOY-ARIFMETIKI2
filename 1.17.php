<?php
  // 1.17 Найти наибольший общий делитель (НОД) двух натуральных чисел N и M

  $n=70;
  $m=100;
  if($n<$m) $length = $n;
  else $length = $m;
  for($i=1;$i<=$length;$i++)
  {
    if($n%$i==0 && $m%$i==0)
    {
      if($i>$max) $max=$i;
    }
  }
  echo "NOD = $max</br >";
?>
