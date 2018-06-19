<?php
  // 1.10 Найти все меньшие N числа-палиндромы, которые при возведении
  // в квадрат дают палиндром. Число называется палиндромом, если его за-
  // пись читается одинаково с начала и с конца.

  echo "Числа-палиндромы:</br>";
  $n = 10000;
  for($i=10;$i<$n;$i++)
  {
    $square = $i*$i;
    do {
      $number = $square%10;
      $str = $str.$number;
      $square/=10;
    } while ($square>1);
    $sqr = $i*$i;
    if($str==$sqr) echo "$i - $sqr</br>";
    $str = "";
  }
?>
