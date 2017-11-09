<?php 

	include_once('personne.php');
	include_once('dbcon.php');
	include_once('insertion.php');

	/*$pers1 = new Personne ('TOTO', 'Titi', '12-12-1922');
	$pers2 = new Personne ('TROTRO', 'L\'ane', '10-10-1910');
	$pers3 = new Personne ('CABRA', 'Chupa', '10-10-1999');*/

	/*$tabpersonnes = array ();*/
	/*$query = "SELECT pers_id, pers_nom, pers_prenom, pers_date_naissance FROM personne ";
			/* Prépare la reqûete*/
			/*if ($stmt = mysqli_prepare($dbcon, $query)) {

			    /* Exécution de la requête */
			    /*mysqli_stmt_execute($stmt);

			    /* Association des variables de résultat */
			   /* mysqli_stmt_bind_result($stmt, $pers_id, $pers_nom, $pers_prenom, $pers_date_naissance);

			    /* Lecture des valeurs */
			    /*while (mysqli_stmt_fetch($stmt)) {
			    	$ladate = new DateTime($pers_date_naissance);
			        $pers = new personne($pers_id, $pers_nom, $pers_prenom, date_format($ladate,'d-m-Y'));
			     /*   $tabpersonnes[] = $pers;

			    }

			    /* Fermeture de la commande */
			   /* mysqli_stmt_close($stmt);
			}
		}*/

		//1 Etape Connexion non décomposé
	function getElementByiD($id, $dbcon){

		$dbcon = new mysqli('localhost', 'root', 'root', 'exoserv');

		//2 Etape - Requetes
		$query = 'SELECT pers_id, pers_nom, pers_prenom, pers_date_naissance FROM personne WHERE pers_id ='.$id.'';
		$SQLResult = mysqli_query($dbcon, $query);

		if($SQLRow = mysqli_fetch_array($SQLResult)){

			$pers= new Personne ($SQLRow[0], $SQLRow[1], $SQLRow[2], $SQLRow[3]);
		   	
		   	return $pers;  
		}else{
		    print('resultat vide');
		}

		//3 Etape - Fermeture
		mysqli_close($dbcon);
	}
?>