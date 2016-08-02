<?php
		//Paramêtres de connexion à la base de données
		//echo $_SERVER['REMOTE_ADDR'];
					
		$whitelist = array( '127.0.0.1', '::1' );
    	if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
			{
				include ("php_file/inc_jambon.php");
			}
		else 
			{
				include ("php_file/inc_jambonCuit.php");
			}
			
		//Connexion à la base de données avec les informations contenues dans les variables
		$connexion=mysqli_connect($hôte, $utilisateur, $mPasse,$nombase)
		or die ("La connexion n'a pas été établie");
		

?>
