<?php
  // 1.13 Определить, является ли число 2n + m симметричным, т. е. запись
  // числа содержит четное количество цифр и совпадают его левая и правая
  // половинки.

  $n = 12;
  $m = 568;
  $power = 1;
  $chislo=1;
  while ($power<=$n) {
    $chislo *=2;
    $power++;
  }
  $chislo+=$m;
  $a = $chislo;
  while ($a>1) {
    $per = $per*10+$a%10;
    $a/=10;
    $count++;
  }
  if($chislo==$per && $count%2==0) echo "Число $chislo Симметричное";
  else echo "Число $chislo Не симметричное";
?>
