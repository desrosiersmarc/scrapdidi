<?php
				//Include de l'affichage des Marques
				//Permet d'enregistrer l'action à réaliser en fonction du bouton sélectionné et de lancer la fonction action... permettant de mettre à jour la base
					if (!empty($_POST['creerMarques']))
						{
							$_SESSION['action']='creerMarques';
							$noLigne=$_POST['creerMarques'];
						}
					elseif  (!empty($_POST['majMarques']))
						{
							$_SESSION['action']='majMarques';
							$noLigne=$_POST['majMarques'];
						}
					elseif (!empty($_POST['supprimerMarques']))
						{
							$_SESSION['action']='supprimerMarques';
							$noLigne=$_POST['supprimerMarques'];
						}
					else
						{
							$_SESSION['action']='';
						}

						
					if (!empty($_SESSION['action']))
						{
							//echo "L'action à réaliser est : $_SESSION[action] et le numéro de ligne est : $noLigne <br/>";
							actionsMarques($_POST['idMarques'.$noLigne], $_POST['nomMarques'.$noLigne], $_POST['actifMarques'.$noLigne], $_SESSION['action']);
						}
				
?>