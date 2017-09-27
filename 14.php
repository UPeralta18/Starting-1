<?php
	$nome = '';
	$sexo = 'M';
	$idade = 27;

	if(strcmp($sexo,'F') == 0 && $idade <= 25)
		echo "Aceita";
	else
		echo "Não aceita";
?>