<h1>Praticando encapsulamento...</h1>
<pre>
<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors',1);

	include_once("PC.class.php");
	$user1 = new PC();

	$user1->ligar();
	$user1->navegar();
	$user1->programar();
	
	print_r($user1);

	$user2 = new PC();

	$user2->programar();
	$user2->navegar();
	$user2->ligar();
	$user2->navegar();
	$user2->programar();

	
	print_r($user2);
?>
</pre>