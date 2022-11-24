<pre>
<?php
	require_once "Caneta.class.php";

	$c1 = new Caneta("BIC", 0.5, "AZUL");
	$c2 = new Caneta("kkk", 1.0,"Verde");
	$c1->setModelo("BIC");
	$c1->setPonta(0.5);

	print_r($c1);
	print_r($c2);
?>
<pre/>