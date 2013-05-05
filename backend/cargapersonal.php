<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT * FROM personal WHERE cedula = :cedula';

		$s1 = $pdo->prepare($sql);
		$s1->bindValue(':cedula',$_POST['cedula']);
		$s1->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	$cant = $s1->rowCount();

	if ($cant < 1) {

		try {

			$sql = 'INSERT INTO personal SET
			cedula = :cedula,
			grado = :grado,
			apellidos = :apellidos,
			nombres = :nombres,
			departamento = :departamento';

			$s = $pdo->prepare($sql);
			$s->bindValue(':cedula',$_POST['cedula']);
			$s->bindValue(':grado',$_POST['grado']);
			$s->bindValue(':apellidos',$_POST['apellidos']);
			$s->bindValue(':nombres',$_POST['nombres']);
			$s->bindValue(':departamento',$_POST['departamento']);
			$s->execute();
?>

<script type="text/javascript">
	alert('el personal ha sido cargado.');
	location.href = '../cargapersonal.php';
</script>

<?php

		}

		catch (PDOException $e) {

			echo 'Ha ocurrido un error.';
			exit();

		}
	}
	else{

		?>

		<script type="text/javascript">
			alert('Personal ya registrado.');
			location.href = '../cargapersonal.php';
		</script>

		<?php

	}

?>