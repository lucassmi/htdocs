<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesite.css">
	<title>Page Fiche</title>
	<style type="">	
		th{
			background-color: silver;
			color: red;
			border: solid 10px magenta;
			font-weight: bolder;
		}

		td{
			background-color: salmon;
		 	font: italic 15px blue;
		 	border: solid 10px black
		}

		.lignebas {
			background-color:  white;
			color: black; 
			font: italic 8px; 
			text-align: right;
		}

		table {
			border-collapse: collapse;
		}




	</style>
</head>
<div class="bandeaux">

	<img src="Lambda_logo.png" alt="La page lambda"/>
	<p>Pourquoi reporter à demain ce qui peut être fait par un autre.</p>
</div>

<body>
	<nav class="navigation">
		<ol>
			<a href="index.php" title="Page d'accueil">Accueil</a></li> <!-- Page d'accueil c'est inutil mais c'est la norme :D-->
			<a href="liste.php" title="Page liste">Liste</a></li>
			<a href="fiche.php" title="Page Fiche">S'inscrire</a></li>
			<a href="connection.php" title="Page connection">Se connecter</a></li>
			<a href="open.php">open</a>
		</ol>
	</nav>
	<section>
<!--	<table border="1">
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date de naissance</th>
				<th colspan="3">Action</th>
			</tr>
			<tr>
				<td>Delacroix</td>
				<td>Maurice</td>
				<td>99/99/1666</td>
				<td>...</td>
				<td>...</td>
				<td>...</td>
			</tr>
			<tr>
				<td class="lignebas" colspan="6">qsknhjdnpmqnhjdpqoshj</td>
			</tr>
			<br>
-->
		<?php 

			/*$nom = array('nom', 'nom2', 'nom3');
			$prenom = array ('prenom', 'prenom2', 'prenom3');
			$ddn = array ('18/12/1995', '10/10/1994', '10/11/1993');
			$tableau = array ('Nom' => $nom, 'Prenom' => $prenom, 'Date de naissance' => $ddn);
			for ($i = 0; $i < count($tableau['Nom']); $i++) {
		?>
			<tr>
		<?php 	
				foreach ($tableau as $value) {
		?>
			<td><?php print($value[$i]); ?></td>
		<?php
			}
		?>
			<td>...</td>
			<td>...</td>
			<td>...</td>
		<tr/>
		<?php
		}
		?> 

			*/
			include_once('data.php');





			//$tabpersonnes = array ($pers1, $pers2, $pers3);
			


			/*$query = "SELECT pers_id, pers_nom FROM personne ";

			if ($stmt = mysqli_prepare($dbcon, $query)) {

			    /* Exécution de la requête 
			    mysqli_stmt_execute($stmt);

			    /* Association des variables de résultat 
			    mysqli_stmt_bind_result($stmt, $pers_id, $pers_nom);

			    /* Lecture des valeurs 
			    while (mysqli_stmt_fetch($stmt)) {
			        print("$pers_id $pers_nom ");
			    }

			    /* Fermeture de la commande 
			    mysqli_stmt_close($stmt);
			}

			/* Fermeture de la connexion 
			mysqli_close($dbcon);*/

			?>


		<table>
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Ddn</th>
				<th>Age</th>
				<th colspan="3">Actions</th>
			</tr>

		<?php 

			$SQLQuery= "SELECT pers_id, pers_nom, pers_prenom, pers_date_naissance FROM personne";
			$SQLResult = mysqli_query($dbcon, $SQLQuery);



			$script='';
			//foreach ($tabpersonnes as $indice => $pers){

			while ($SQLRow = mysqli_fetch_array($SQLResult)){
				$pers = new Personne ($SQLRow['pers_id'], $SQLRow['pers_nom'], $SQLRow['pers_prenom'], $SQLRow['pers_date_naissance']);

				$script .= '<tr>';
				$script .= '<td>'.$pers -> getNom().'</td>';
				$script .= '<td>'.$pers -> getPrenom().'</td>';
				$script .= '<td>'.$pers -> getDdn().'</td>';
				$script .= '<td>'.$pers -> getAge().'</td>';
				$script .= '<td><a href="fiche.php?id='.$pers -> getId().'"><img src="user_edit.png" alt="Modifier utilisateur" class="pititeicone"/></a></td>';
				$script .= '<td><img src="user_delete.png" alt="Supprimer utilisateur" class="pititeicone"/></td>';
				$script .= '<td><img src="pm.png" alt="Message privée" class="pititeicone"/></td>';
				$script .= '</tr>';
			
			$script .= '<tr><td class="lignebas" colspan="7"></td></tr>';
			

			}
			print($script);
		?>
		

		</table>
		</br>



		<!--<?php 
		/*$personnes = array (array ('nom' => 'alain', 'prenom' => 'alex', 'ddn' => '12/12/1212'),
							array ('nom' => 'alain', 'prenom' => 'alex', 'ddn' => '12/12/1212'),
							array ('nom' => 'alain', 'prenom' => 'alex', 'ddn' => '12/12/1212'),)*/
		 ?>
		-->

		<!-- <?php 
		 /* include_once ('Personne.php');
			print($pers1 -> getNom().'<br/>'.$pers1 -> getPrenom()); */
		?> -->

		<!--<table>
		 	<tr>
		 		<th>Nom</th><th>Prenom</th><th>ddn</th>
		 	</tr>
		
		?php 
		/*foreach ($personnes as $personne) {
			echo '<tr>';
				foreach ($personne as $carac) {
					echo '<td>'.$carac.'</td>';
				}
				echo '</tr>';
		}*/
		 ?> 
		</table> -->

	</section>
</body>
</html>

<script type="text/javascript" src="lescript.js">
	
</script>