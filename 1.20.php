<?php
  // 1.20 Найти целое число в диапазоне от N до M с наибольшей суммой делителей

  function sum_del($k)
  {
    $m=$k;
    for($n=1;$n<$m;$n++)
    {
      if($m%$n==0) $sum+=$n;
    }
    return $sum;
  }

  $m=100;
  for($i=1;$i<$m;$i++)
  {
    $sd=sum_del($i);
    if($max<$sd)
    {
      $max=$sd;
      $num=$i;
    }
  }
  echo $num;
?>
