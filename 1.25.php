<?php
  // 1.25 Среди заданной последовательности натуральных чисел
  // n0,n1,...,nm найти сумму и количество тех чисел, которые равны сумме
  // факториалов своих цифр

  function fact($i)
  {
    $n=$i;
    $fact=1;
    while ($n>1) {
      $number = $n%10; // 5
      for($j=1;$j<=$number;$j++)
      {
        $fact*=$j;
      }
      $res=$fact+$res;
      $fact=1;
      $n/=10;
    }
    return $res;
  }

  $sum=0;
  $count=0;
  for($i=1;$i<1000;$i++)
  {
    if(fact($i)==$i)
    {
        echo "$i<br>";
        $count++;
        $sum+=$i;
    }
  }
  echo "SUM = $sum | COUNT = $count";
?>
