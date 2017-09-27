<?php
	$a = 10;
	$b = '10';

	if($a === $b)
		echo 'Iguais';
	else
		echo 'Diferentes';

	echo '<br />';

	if($a <=> $b)
		echo 'Diferentes';
	else
		echo 'Iguais';

	echo '<br />';

	echo $a + $b, $a - $b, $a * $b, $a / $b;
?>