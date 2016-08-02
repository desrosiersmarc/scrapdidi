<?php
	//Include de la gesstion des familles dans la page adminDidi
	//Permet d'enregistrer l'action à réaliser en fonction du bouton sélectionné et de lancer la fonction action... permettant de mettre à jour la base
		if (!empty($_POST['creerFamilles']))
			{
				$_SESSION['actionFamilles']='creerFamilles';
				$noLigne=$_POST['creerFamilles'];
			}
		elseif  (!empty($_POST['majFamilles']))
			{
				$_SESSION['actionFamilles']='majFamilles';
				$noLigne=$_POST['majFamilles'];
			}
		elseif (!empty($_POST['supprimerFamilles']))
			{
				$_SESSION['actionFamilles']='supprimerFamilles';
				$noLigne=$_POST['supprimerFamilles'];
			}
		else
			{
				$_SESSION['actionFamilles']='';
			}

			
		if (!empty($_SESSION['actionFamilles']))
			{
				//echo "L'action à réaliser est : $_SESSION[action] et le numéro de ligne est : $noLigne <br/>";
				actionsFamilles($_POST['idFamilles'.$noLigne], $_POST['ordreFamilles'.$noLigne], $_POST['idCategorieFamilles'.$noLigne], $_POST['nomFamilles'.$noLigne], $_POST['actifFamilles'.$noLigne], $_SESSION['actionFamilles']);
			}
?>