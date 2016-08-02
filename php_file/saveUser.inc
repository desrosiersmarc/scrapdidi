<?php
		//This part of code save information about client on database and create a command
		
		if ( isset($_SESSION['noSession']) and $_SESSION['noSession']==session_id ())
		//if (1==2)
			{
				
			}
		else 
			{
				//Enregistre le no de Session dans une variable
				$noSession=session_id ();
				
				//Save number of session in a session's variable to use it on differents pages
				$_SESSION['noSession']=$noSession;
				
				//Récupère l'information sur le navigateur de l'utilisateur. Utiliser ensuite preg_match pour rechercher s'il s'agit d'un iPhone, blackberry...
				$navigateurClient=$_SERVER['HTTP_USER_AGENT'];
				
				//Récupère l'information sur l'IP
				$localisationClient=$_SERVER["REMOTE_ADDR"];
				
				saveSessionInformation($noSession, $navigateurClient, $localisationClient);
				
				createCommande($noSession);
				
				createPanier($noSession);
			}
?>