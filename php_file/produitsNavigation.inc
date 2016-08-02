<?php
				//echo "Le n° du menu sélectionné est : $_POST[menuHP]";
				//Récupération du no du bouton et du nom en fonction de l'id du bouton
				//Catégorie avec sauvegarde des infos dans des variables de session

				//
								
				echo"
				<form method='post' action='produits.php'>
					<div id='idNavigationContent'>
						<div id='idNavigation'>
						
						<a href='produits.php'><img id='imgHome' src='media_site/home.png'></a>
					";
						//Collect information to navigate into the navigate bar
						$buttonName=['menuHP','nomMenuFamilles','nomMenuSousFamilles'];
						$buttonValue=[$_SESSION['noCategorie'],$_SESSION['noFamilles'],$_SESSION['noSousFamilles']];
						
						foreach ($_SESSION['etapesArray'] as $key => $value) 
						{
							$message=$buttonName[$key].' '.$buttonValue[$key];
							echo"
							<button class='butonFlecheNavigation'>></button>
							<button href='#' class='buttonNavigation' name=$buttonName[$key] value=$buttonValue[$key]>$value</button>
							";	
							//Button are clickable to go on the 'sous familles'	
						}
					$_SESSION["sousFamilleSelected"]=$value;
				
				echo"
				</form>
					</div>
				</div>
				";
				
				

?>