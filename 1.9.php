<?php
// 1.9 Дано натуральное число N. Определить, является ли оно автоморфным.
//		 Автоморфное число равно последним разрядам квадрата этого
//		 числа. Например, 525, 636, 25625.

	$n = 	6;
	$square = $n*$n;
	do {
		$number = $square%10;
		$chislo = $number.$chislo;
		if($number==$n || $chislo==$n)
		{
			$res = "YES";
			break;
		}
		$square = $square/10;
	} while ($square>1);

	if($chislo!=$n) $res="NO";
	echo $res;

?>
