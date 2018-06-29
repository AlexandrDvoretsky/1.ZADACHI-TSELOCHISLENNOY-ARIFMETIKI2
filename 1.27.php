<?php
  // 1.27 Среди натуральных чисел n0,n1,...,nm найти число с максимальной суммой простых делителей

  function sum_del($n)
  {
    $m=$n;
    $sum=0;
    for($i=2;$i<$m;$i++)
    {
      if($m%$i==0)
      {
        for($j=2;$j<$i;$j++)
        {
          if($i%$j==0) $count++;
        }
        if($count<2) $sum+=$j;;
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
  echo "MAX NUM = $num | MAX COUNT = $max<br>";
?>
