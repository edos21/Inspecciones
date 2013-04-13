<?php 

	include 'backend/includes/conexion.php';

	$fecha1 = $_POST['desde'];
	$fecha2 = $_POST['hasta'];

	include 'consultar1.php';
	exit();

?>