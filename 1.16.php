<?php
  // 1.16 Натуральное число называют совершенным, если оно равно сумме
  // всех своих делителей, не считая его самого. Например, 6=1+2+3. Найти
  // все совершенные числа в диапазоне от N до M.

  for($i=1;$i<1000;$i++) // интервал чисел от N до M.
  {
    $m=$i;
    $sum=0;
    for($n=1;$n<$m;$n++) // его делители
    {
      if($m%$n==0)
      {
        $sum+=$n;
      }
    }
    if($sum==$i) echo "$i</br>";
  }
?>
