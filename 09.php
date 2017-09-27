<?php
	$a = 30;
	$k = 0;
	for($i = 1; $i <= $a; $i++)
	{
		if($a % $i == 0)
			$k++;
	}

	if($k <= 2)
		echo "É primo";
	else
		echo "Não é primo";
?>