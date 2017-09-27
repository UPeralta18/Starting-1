<?php
	function menor($n1, $n2, $n3)
	{
		if($n1<=$n2 && $n1<=$n3)
			echo $n1, ' é o menor';
		else if ($n2<=$n1 && $n2<=$n3)
			echo $n2, ' é o menor';
		else
			echo $n3, ' é o menor';

	}

	$n1 = 1;
	$n2 = 0;
	$n3 = 1;

	if($n1 == $n2 && $n1 == $n3)
		echo 'São iguais';
	else
		menor($n1, $n2, $n3);
?>