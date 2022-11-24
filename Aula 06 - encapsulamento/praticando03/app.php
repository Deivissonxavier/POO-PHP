<h1>Praticando encapsulamento...</h1>
<pre>
<?php
	ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once"ControleRemoto.class.php";
	$c = new ControleRemoto();

	$c->maisVolume();
	$c->ligar();
	$c->maisVolume();
	$c->maisVolume();
	$c->menosVolume();
	$c->play();
	$c->ligarMudo();
	$c->desligarMudo();
	$c->pause();


	$c->abrirMenu();
	print_r($c);

?>
</pre>