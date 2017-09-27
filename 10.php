<?php
	$a = 2;
	$b = 7;

	if ($a + 1 == $b || $a - 1 == $b || $a == $b)
		echo "Não há números entre eles";

	if($a > $b)
	{
		$maior = $a;
		$menor = $b;
	}
	else
	{
		$maior = $b;
		$menor = $a;
	}

	for($i = $menor+1; $i < $maior; $i++)
		echo "$i ";
?>