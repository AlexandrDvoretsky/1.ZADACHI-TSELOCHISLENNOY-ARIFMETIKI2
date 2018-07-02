<?php
  // 1.30 Найти среди натуральных чисел n0,n1,...,nm числа-близнецы,
  // т.е. два таких простых числа, разность между которыми равна двум.

function numbers($ch)
{
  $n=$ch;
  for($i=1;$i<$n;$i++)
  {
    if($n%$i==0) $count++;
    if($count<2) $res = true;
    else $res = false;
  }
  return $res;
}

$n=100;
$count=0;
for($i=0;$i<$n;$i++)
{
  $res = numbers($i);
  if($res)
  {
    $mas[]=$i;
    $count++;
  }
}
echo "Числа-близнецы до $n:<br>";
for($j=0;$j<$count;$j++)
{
 if($mas[$j]-$mas[$j+1]==-2)
 {
    echo "$mas[$j]"." | ".$mas[$j+1]."<br>";
 }
}
?>
