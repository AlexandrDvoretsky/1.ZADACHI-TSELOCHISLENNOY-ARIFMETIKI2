<?php
  // Даны натуральные числа N и M. Определить, являются ли они
  // взаимно простыми числами. Взаимно простые числа не имеют общих
  // делителей, кроме единицы

  $n=23;
  $m=30;
  if($n>$m) $length = $n;
  else $length = $m;
  for($i=1;$i<$length;$i++)
  {
    if($n%$i==0 && $m%$i==0)
    {
      if($i==1) $res = "Взаимно простые";
      else $res = "Не Взаимно простые";
    }

  }
  echo "Результат: Числа $n и $m $res</br >";
?>