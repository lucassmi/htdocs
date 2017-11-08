<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="stylesite.css">
		<title>Ma première page</title>
		<meta charset="utf-8">
</head>

<div class="bandeaux">

	<img src="Lambda_logo.png" alt="La page lambda"/>
	<p>Pourquoi reporter à demain ce qui peut être fait par un autre.</p>
</div>
<body>

	<?php
	print ('<h1> Bonjour, nous somme le' .date('d/m/y'). '</h1>'); //retourne la date du jour
	
	?>

	<nav class="navigation">
		<ol>

			<a href="index.php" title="Page d'accueil">Accueil</a> <!-- Page d'accueil c'est inutil mais c'est la norme :D-->
			<a href="liste.php" title="Page liste">Liste</a>
			<a href="fiche.php" title="Page Fiche">S'inscrire</a>
			<a href="connection.php" title="Page connection">Se connecter</a></li>
			<a href="open.php">open</a>

		</ol>

	</nav>
	<section>

		<article class="article">

			<header class="articletitre"> Jeux gratuit pas cher</header>

			<a href="pub.php">
			<img class="displayimg"  src="nier.jpg" alt="image jeux gratuit pas cher"/>
			</a>
			<p class="contenuarticle">Jeux gratuit pas cher, nier pas cher, nier gratuiiiiiiiiiiiiiit </br>
			CLICK & PLAY !! </p>
			<footer>Ecrit par John Doe le 10/10/1010</footer>

		</article>
		
	</section>

	<section>

		<article class="article">

			<header class="articletitre"> Jeux gratuit pas cher</header>

			<a href="pub.php">
			<img class="displayimg"  src="nier.jpg" alt="image jeux gratuit pas cher"/>
			</a>
			<p class="contenuarticle">Jeux gratuit pas cher, nier pas cher, nier gratuiiiiiiiiiiiiiit </br>
			CLICK & PLAY !! </p>
			<footer>Ecrit par John Doe le 10/10/1010</footer>

		</article>
		
	</section>


</body>

</html>

<script type="text/javascript" src="temperature.js"> </script>
