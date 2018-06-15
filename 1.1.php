<?php
  // 1.1 Определить количество цифр, меньших 5, используемых при записи натурального числа N.

  $n = 2077440554;
  $count = 0;
  do {
    $number=$n%10;
    if($number<5)
    {
      $count = $count+1;
    }

    if($number==0)
    {
      $befor=(($n/10)%10);
      if($befor>0)
      {
        $number=$befor;
      }
    }
    $n=$n/10;
  } while ($number>0);

   echo "Count is ",$count-1," numbers";
?>
