<?php
		//éléments de connexion au serveur
		$hôte="localhost";
		$utilisateur="root";
		$mPasse="";
		$nombase="scrapdidi";

		//A supprimer des autres pages...
		$connexion=mysqli_connect($hôte, $utilisateur, $mPasse,$nombase) or die ("La connexion n'a pas été établie");
		
		//echo "Intégration des paramétres de connexion";
		
?>