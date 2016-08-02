<?php
	//Include de la gesstion des sous familles dans la page adminDidi
	//Permet d'enregistrer l'action à réaliser en fonction du bouton sélectionné et de lancer la fonction action... permettant de mettre à jour la base
		if (!empty($_POST['creerSousFamilles']))
			{
				$_SESSION['actionSousFamilles']='creerSousFamilles';
				$noLigne=$_POST['creerSousFamilles'];
			}
		elseif  (!empty($_POST['majSousFamilles']))
			{
				$_SESSION['actionSousFamilles']='majSousFamilles';
				$noLigne=$_POST['majSousFamilles'];
			}
		elseif (!empty($_POST['supprimerSousFamilles']))
			{
				$_SESSION['actionSousFamilles']='supprimerSousFamilles';
				$noLigne=$_POST['supprimerSousFamilles'];
			}
		else
			{
				$_SESSION['actionSousFamilles']='';
			}

			
		if (!empty($_SESSION['actionSousFamilles']))
			{
				//echo "L'action à réaliser est : $_SESSION[action] et le numéro de ligne est : $noLigne <br/>";
				actionsSousFamilles($_POST['idSousFamilles'.$noLigne], $_POST['ordreSousFamilles'.$noLigne], $_POST['idFamillesSousFamilles'.$noLigne], $_POST['nomSousFamilles'.$noLigne], $_POST['actifSousFamilles'.$noLigne], $_SESSION['actionSousFamilles']);
			}
?>