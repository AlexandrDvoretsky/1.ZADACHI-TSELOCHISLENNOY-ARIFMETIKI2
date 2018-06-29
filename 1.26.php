<?php
  // 1.26 Среди натуральных чисел n0,n1,...,nm найти число с максимальной суммой делителей.

  function sum_del($n)
  {
    $m=$n;
    $sum=0;
    for($i=1;$i<$m;$i++)
    {
      if($m%$i==0)
      {
        $sum+=$i;
      }
    }
    return $sum;
  }

  $m=100;
  for($n=1;$n<$m;$n++)
  {
    $sd = sum_del($n);
    if($max<$sd)
    {
      $max=$sd;
      $num=$n;
      echo "$num | $max<br>";
    }
  }
  echo "MAX NUM = $num | MAX COUNT = $max";
?>
