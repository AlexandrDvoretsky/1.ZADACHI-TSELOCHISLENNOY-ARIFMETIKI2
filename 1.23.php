<?php
 // 1.23 Дано целое число N. Преобразовать число так, чтобы его цифры следовали в порядке возрастания

  $m=9630258147;
  $n=$m;
  for ($i=0; $n>1; $i++) {
    $num=$n%10;
    $mas[$i]=$num;
    $n/=10;
    $count++;
  }

  for($k=1;$k<$count;$k++)
  {
    for($r=0;$r<$count-1;$r++)
    {
      if($mas[$r]>$mas[$r+1])
      {
        $hold=$mas[$r];
        $mas[$r] = $mas[$r+1];
        $mas[$r+1]=$hold;
      }
      elseif($mas[$r]==$mas[$r+1])
      {
        $hold=$mas[$r];
        $mas[$r] = $mas[$r+1];
        $mas[$r+1]=$hold;
      }
    }
  }

  echo "$m<br><hr>";
  for($l=0;$l<$count;$l++)
  {
    echo " $mas[$l]";
  }
?>
