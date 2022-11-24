<?php
	require_once "Caneta2.class.php";

	$c1 = new Caneta("BIC", "Azul",0.5);
	$c2 = new Caneta("Compacto", "Preta",0.4);
	$c3 = new Caneta();

	/$c3->getModelo("CJ");

	print_r($c1);

	echo "<br/>";

	print_r($c2);

	echo "<br/>";

?>