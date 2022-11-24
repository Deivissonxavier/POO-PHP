<h1>Praticando encapsulamento</h1>
<pre>
<?php
	ini_set("error-reporting", E_ALL);
	ini_set("display_errors",1);
	require_once"ControleRemoto.class.php";
	$c = new ControleRemoto();

	$c->maisVolume();
	$c->ligar();
	$c->play();
	$c->ligarMudo();

	$c->maisVolume();
	$c->desligarMudo();
	$c->maisVolume();
	$c->maisVolume();
	$c->maisVolume();
	$c->menosVolume();
	$c->pause();
	$c->abrirMenu();
	print_r($c);
?>
</pre>