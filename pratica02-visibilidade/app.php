<?php
	require_once "codigo.class.php";

	$c1 = new Caneta;
	$c1->modelo = "BIC cristal";
	$c1->cor = "Azul";
	//$c1->ponta = 0.5;
	print_r($c1);

	$c1->rabiscar();
?>