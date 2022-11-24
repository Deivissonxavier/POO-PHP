<h1>Praticando encapsulamento...</h1>
<pre>
<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors',1);

	require_once"ControleRemoto.class.php";

	$c = new ControleRemoto();
	$c->ligar();
	$c->maisVolume();
	$c->abrirMenu();
	$c->menosVolume();

	print_r($c);
?>
</pre>