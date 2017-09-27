<?php
	$h = 1.8;
	$s = 'M';

	if (strcmp($s, 'M') == 0)
		echo 72.7*$h-58;
	else if (strcmp($s, 'F') == 0)
		echo 62.1*$h-44.7;	
	else
		echo 'Sexo errado';
?>