<?php 

	try {
	
		$pdo = new PDO('mysql:host=localhost;dbname=inspecciones', 'root', '');	
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
		
	}
	
	catch (PDOException $e) {
		
		echo 'Ha ocurrido un error estableciendo la conexi&oacute;n con la base de datos.';	
		exit();

	}

?>