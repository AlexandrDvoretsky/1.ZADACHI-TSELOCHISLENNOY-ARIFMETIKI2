<?php
  // 1.19 Найти наименьшее общее кратное (НОК) двух натуральных чисел N и M.

$n=50;
$m=75;

if($n>$m) $length = $n;
else $length = $m;
for($i=1;$i<$length;$i++)
{
  if($n%$i==0 && $m%$i==0) $nod = $i;
}
echo "NOK = ".$n*$m/$nod."</br >";
?>
