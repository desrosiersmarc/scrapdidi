<?php
				//Include de l'affichage des Fournisseurs
				//Permet d'enregistrer l'action à réaliser en fonction du bouton sélectionné et de lancer la fonction action... permettant de mettre à jour la base
					if (!empty($_POST['creerFournisseurs']))
						{
							$_SESSION['action']='creerFournisseurs';
							$noLigne=$_POST['creerFournisseurs'];
						}
					elseif  (!empty($_POST['majFournisseurs']))
						{
							$_SESSION['action']='majFournisseurs';
							$noLigne=$_POST['majFournisseurs'];
						}
					elseif (!empty($_POST['supprimerFournisseurs']))
						{
							$_SESSION['action']='supprimerFournisseurs';
							$noLigne=$_POST['supprimerFournisseurs'];
						}
					else
						{
							$_SESSION['action']='';
						}

						
					if (!empty($_SESSION['action']))
						{
							//echo "L'action à réaliser est : $_SESSION[action] et le numéro de ligne est : $noLigne <br/>";
							actionsFournisseurs($_POST['idFournisseurs'.$noLigne], $_POST['nomFournisseurs'.$noLigne], $_POST['actifFournisseurs'.$noLigne], $_SESSION['action']);
						}
				
?>