<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		ini_set ( 'display_errors' , 1); 
		error_reporting (E_ALL);
		require_once"Lutador.class.php";

		$l = array();
		$l[0] = new Lutador("Pretty Boy", "França", 30, 1.75,

					68.9, 11, 2, 1);
		$l[0]->status();

		$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8,
					14, 2, 3);
		$l[1]->status();

		$l[2] = new Lutador("SnapShaow", "EUA", 35, 1.65,
				80.9, 12, 2, 1);
		$l[3] = new Lutador("Dead code", "Autralia", 28,
				1.93, 81.6, 13, 0, 2);
		$l[4] = new Lutador("UFOCoboi", "Brasil", 37, 1.70,
				119.3, 5, 4, 3);
		$l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7,
				12, 2, 4);
		$l[3]->perderLuta();
		$l[3]->apresentar();

		$l[2]->status();
		$l[3]->status();
		$l[4]->status();
		$l[5]->status();

	?>

</body>
</html>