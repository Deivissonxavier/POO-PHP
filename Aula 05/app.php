<?php
	include_once("ContaBanco.class.php");
	$p1 = new ContaBanco(); ///jubileu
	$p2 = new ContaBanco(); ///creuza

	$p1->abrirConta("CC");
	$p1->setNumConta(1111);
	$p1->setDono("jubileu");
	$p2->abrirConta("CP");
	$p2->setNumConta(2222);
	$p2->setDono("creuza");

	$p1->depositar(300);
	$p2->depositar(500);

	$p2->sacar(1000);

	$p1->pagarMensal();
	$p2->pagarMensal();

	$p1->sacar(338);
	$p2->sacar(630);

	$p1->fecharConta();
	$p2->fecharConta();

	print_r($p1);
	print_r($p2);
?>