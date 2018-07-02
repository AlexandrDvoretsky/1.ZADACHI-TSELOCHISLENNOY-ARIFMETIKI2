<?php
  // 1.18 Два натуральных числа называют дружественными, если каждое
  // из них равно сумме всех делителей другого. Найти все пары дружествен-
  // ных чисел, лежащих в диапазоне от N до M

  function sum_del($ch)
  {
    $n=$ch;
    for($i=1;$i<$n;$i++)
    {
      if($n%$i==0) $del+=$i;
    }
    return $del;
  }

  echo "Дружественные числа: <br>";
  for($i=100;$i<200;$i++)
  {
    for($j=100;$j<200;$j++)
    {
      $sdi = sum_del($i);
      $sdj = sum_del($j);
      if(($sdi == $sdj) && ($sdi!=1 && $sdj!=1) && ($i!=$j))
      {
        echo "Числа: $i - $j. Сумма их делителей: $sdi = $sdj <br>";
      }
    }
  }
?>