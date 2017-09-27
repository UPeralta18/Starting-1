<?php

	function calcular($n1, $op, $n2)
	{
		if (strcmp($op, '+') == 0)
			echo 'Resultado: ', $n1+$n2;
		else if (strcmp($op, '-') == 0)
			echo 'Resultado: ', $n1-$n2;
		else if (strcmp($op, '*') == 0)
			echo 'Resultado: ', $n1*$n2;
		else if (strcmp($op, '/') == 0)
			echo 'Resultado: ', $n1/$n2;
	}

	$num1 = 3;
	$num2 = 5;
	$op = '*';

	calcular($num1, $op, $num2);
?>