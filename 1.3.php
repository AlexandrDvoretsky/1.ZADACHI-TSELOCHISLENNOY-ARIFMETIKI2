<?php
  // 1.3 Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.

  $n = 123456789;
  do {
    $last=$n%10;
    $beforlast=(($n/10)%10);

    if($beforlast==0) break;

    if($last>$beforlast) $result = "YES";

    else $result = "NO";

    $n=$n/10;
  } while ($last>$beforlast);

  echo $result;
?>
