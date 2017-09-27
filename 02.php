<?php

	$nota1 = 7;
	$nota2 = 6;
	$nota3 = 5;

	$media = ($nota1+$nota2+$nota3)/3;

	if($media >= 7)
		echo 'Aprovado';
	else if ($media >= 4)
		echo 'Prova final';
	else
		echo 'Recuperação';
?>