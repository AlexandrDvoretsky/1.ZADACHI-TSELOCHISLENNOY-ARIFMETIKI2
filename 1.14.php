<?php
  // 1.14 Парными простыми числами называются два простых числа, раз-
  // ность которых равна двум. Например, 3 и 5; 11 и 13. Найти 10 парных
  // простых чисел.

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

  $n=200;
  for($i=0;$i<$n;$i++)
  {
    $res = numbers($i);
    if($res)
    {
      $mas[]=$i;
      $count++;
    }
  }

  echo "10 парных простых чисел: <br>";
  for($j=0;$j<$count;$j++)
  {
    if($mas[$j+1]-$mas[$j]==2)
    {
      echo "$mas[$j]"." | ".$mas[$j+1]."<br>";
      $k++;
    }
    if($k==10) break;
  }
?>
