<?php 

	include_once('personne.php');


	$pers1 = new Personne ('TOTO', 'Titi', '12-12-1922');
	$pers2 = new Personne ('TROTRO', 'L\'ane', '10-10-1910');
	$pers3 = new Personne ('CABRA', 'Chupa', '10-10-1999');

	$tabpersonnes = array ($pers1, $pers2, $pers3);
?>