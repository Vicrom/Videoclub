<html>
<head>
	<title>Crear Catálogo</title>
	<link rel="stylesheet" type="text/css" href="estilos/crearCatalogo.css" />
</head>
<body>
	<h2>Película creada con éxito</h2>
	<?php
		$titulo = $_POST['titulo'];
		$director = $_POST['director'];
		$pais = $_POST['pais'];
		$anio = $_POST['anio'];
		$genero = $_POST['genero'];
		$nota = $_POST['nota'];
		echo 'Comprueba los datos de la película añadida:<br />';
		echo 'Título: ' . $titulo.' <br />';
		echo ' Director:  ' . $director . '<br />';
		echo 'Pais: ' . $pais . '<br />';
		echo 'Año: ' . $anio. '<br />';
		echo 'Género: ' . $genero.'<br />';
		echo 'Nota: ' . $nota;
?>
</body>
</html>