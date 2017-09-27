<html>
	<?php
		$titulo = "Minha Pagina";
		$campo = "text";
		$value = "um formulário";
	?>

	<head>
		<title><?php echo $titulo; ?></title>
	</head>

	<body>
		<p>Campo para um texto: </p>
		<input type="<?php echo $campo; ?>" value="<?php echo $value; ?>"/>
	</body>
</html>

<!--O código cria um formulario HTML com campos dinâmicos-->