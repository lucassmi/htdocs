
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="stylesite.css">
	<title>Page fiche</title>
	<meta charset="UTF-8">
</head>

<div class="bandeaux">

	<img src="Lambda_logo.png" alt="La page lambda"/>
	<p>Pourquoi reporter à demain ce qui peut être fait par un autre.</p>

</div>

<body onload = "initcbs();">
	<nav class="navigation">
		<ol>
			<a href="index.php" title="Page d'accueil">Accueil</a></li> <!-- Page d'accueil c'est inutil mais c'est la norme :D-->
			<a href="liste.php" title="Page liste">Liste</a></li>
			<a href="fiche.php" title="Page Fiche">S'inscrire</a></li>
			<a href="connection.php" title="Page connection">Se connecter</a></li>
			<a href="open.php">open</a>
		</ol>
	</nav>

	<section class="formulaire">
		<form method="get" action="">
			<?php  
				//$nom = 'Ali';
				//$prenom = 'BABA';
				// dans prenom : value="<?php echo $prenom 
				//dans nom : value="<?php echo $nom 
				include_once('data.php');

				// ternaire pour intitaliser mapers : 
				// $maPers = isset($_GET[$id])? $tabpersonnes[$_GET['id']]: new Personne();
				// fait la même chose que le if en dessous

				if (isset ($_GET['id'])) {
					$id = $_GET['id'];
					$maPers = $tabpersonnes[$id];
				} else {
					$maPers = new Personne ('','','01-01-1900');
					$id = -1;
				}

			?>

			<?php 
			$script='';
				$script .='<br/>';
				$script .='<label>Nom</label>';
				$script .='<input type="text" name="ttNom" placeholder="Nom" value="'.$maPers->getNom().'"/>';
				$script .='<br/>';
				$script .='<label>Prenom</label> <input type="text" name="ttPrenom" placeholder="Prenom" value="'.$maPers->getPrenom().'"/> ';
				$script .='<br/>';
				$script .='<label>Adresse Mail</label>';
				$script .='<input type="text" name="ttmail" placeholder="Adresse mail">';
				$script .='<br/>';
				print ($script);
			?>


			<label>Date de naissance</label>


			</option>

				<select name="cbJour">
				<option value=""> </option>

					<?php

				

						for ($i=1; $i<32; $i++){
							//test if classique
							if ($i == $maPers->getDdnJour()) {

								echo '<option value="'.$maPers->getDdnJour().'" selected> '.$maPers->getDdnJour().' </option>';
							} else {

									echo '<option value="'.$i.'"> '.$i.' </option>';
							}



					}

					?> 




				</select> 
			<select name="cbMois" onchange="changej();">

				<?php 
					 $tabmois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

					for ($i =0; $i<=11; $i++){
						print '<option value="'.$i.'" '.($i == $maPers->getDdnMois()-1?'selected':'').'>'.$tabmois[$i].'</option>';
					}
				?>

			</select> 
			<select name="cbAnnee" onchange="changej();">

				<?php 
					for ($i=1900; $i<2018; $i++){
						//test ternaire
						print '<option value="'.$i.'" '.($i == $maPers->getDdnAnnee()?'selected':'').'>'.$i.' </option>';
					}
				?>

			</select>
			<br/>

			<label>Mot de passe</label> 
			<input type="password" name="Mot de passe"> <br/>
		<input type="submit" id="btsubmit" />
		<label>Sexe</label> <input type="radio" name="Femme" "Homme"> <br/>


	
		</form>

	<button>test</button> <!-- onclick="test();"--> 

	</section>
	<ul>
		<li>Un</li>
		<li>ou deux</li>
		<li>ou trois?</li>
	</ul>

</body>

</html>

<script type="text/javascript">
	/*function test(){
			var chnom = document.getElementsByName('ttNom')[0];
			if (chnom.value == "")
			{
				alert ("La chaîne est vide");
				chnom.style.borderColor= 'red';
				chnom.focus();
				return;
			}

			var chprenom = document.getElementsByName('ttPrenom')[0];
			if (chprenom.value.trim() == "")
			{
				alert ("La chaîne est vide");
				chprenom.style.borderColor= 'red';
				chprenom.focus();
				return;
			}*/

			/*var cbJour = document.getElementsByName ('cbJour') [0];

			//alert (cbJour.options[1].value);

			var newOption = new Option();
			newOption.value ='32';
			newOption.text ='Un jour impossible.'; 

			cbJour.add(newOption);
			

	}*/ 


	/*function initcbs(){


		var cbJour = document.getElementsByName ('cbJour') [0];
			
		for (var i=1; i<32; i++){
			var newOptioncbjour = new Option ();
			newOptioncbjour.value=i;
			newOptioncbjour.text=i;
			cbJour.add(newOptioncbjour);
		} 
	}


		/*var cbAnnee = document.getElementsByName ('cbAnnee') [0];

		for (var i=1950; i<2017; i++){
			var newOptioncbannee = new Option ();
			newOptioncbannee.value=i;
			newOptioncbannee.text=i;
			cbAnnee.add(newOptioncbannee);
		} 

		var cbMois = document.getElementsByName ('cbMois') [0];
		var tabmois = Array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

		for (var i=1; i<13; i++){
			var newOptioncbmois = new Option ();
			newOptioncbmois.value=i;
			newOptioncbmois.text=tabmois[i-1];
			cbMois.add(newOptioncbmois);
		}

	}*/

	/*function changej() {

 		var cbJour = document.getElementsByName('cbJour')[0]; 
		var cbMois = document.getElementsByName('cbMois')[0];

		cbJour.innerHTML = '';

		var nbjours = 0;

		if  (cbMois.value == 1 || cbMois.value == 3 || cbMois.value == 5 || cbMois.value == 7||  cbMois.value == 8||  cbMois.value == 10||  cbMois.value == 12)
		{
			nbjours = 31;
		}else 
			{ 
				if(cbMois.value == 2)
				{ 
					nbjours = changefev();
				}
				else 
				{
					nbjours = 30;
			}
		}
		
		for (var i=1; i<=nbjours; i++){
			var newOptioncbjourc = new Option();
			newOptioncbjourc.value=i;
			newOptioncbjourc.text=i;
			cbJour.add(newOptioncbjourc);
		}

	}

	function changefev() {
		var cbAnnee = document.getElementsByName('cbAnnee')[0];
		console.log(cbAnnee.value);
		if(cbAnnee.value % 400 == 0 || (cbAnnee.value % 4 == 0 && cbAnnee.value % 100 != 0)){
            return 29;
        }else{
            return 28;
        }
	}

		/* decomposition du calcul de l'année bissextile avec le modulos: 
		si = 0 c'est que reste de la division est 0 donc variable divisible par le diviseur */ 

</script>
				
 <!--<input type="number" name="Année" min="1939" max="2017" > <br/>-->
