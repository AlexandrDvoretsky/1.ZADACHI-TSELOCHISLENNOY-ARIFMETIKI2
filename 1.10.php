<?php
  // 1.10 Найти все меньшие N числа-палиндромы, которые при возведении
  // в квадрат дают палиндром. Число называется палиндромом, если его за-
  // пись читается одинаково с начала и с конца.
  $n=1000;
    for($i = 1; $i <1000; $i++)
    {
      $chislo = $i*$i;

      $fourth = floor(($chislo%100)%10);
      $third = floor(($chislo%100)/10);
      $second = floor(($chislo%1000)/100);
      $first = floor($chislo/1000);

      if(($n>$i) && ($first == $fiveth && $second == $fourth))
      {
        echo "Число $i меньше числа $n. Число палиндром $chislo </br>";
      }
    }
?>