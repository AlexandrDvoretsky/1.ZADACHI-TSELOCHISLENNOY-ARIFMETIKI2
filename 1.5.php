<?php
  //  1.5 По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.

$n = 987654320;

do {
  $number = $n%10;
  $m = $m.$number;
  $n=$n/10;
} while ($n>1);

echo $m;
?>
