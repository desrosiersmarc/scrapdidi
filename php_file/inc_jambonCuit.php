<?php
		//éléments de connexion au serveur
			$hôte="db613539768.db.1and1.com";
			$utilisateur="dbo613539768";
			$mPasse="Jean&1998";
			$nombase="db613539768";
			
		
		//A supprimer des autres pages...
		$connexion=mysqli_connect($hôte, $utilisateur, $mPasse,$nombase) or die ("La connexion n'a pas été établie");

	?>