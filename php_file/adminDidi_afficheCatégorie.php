	<?php
					if (!empty($_POST['creer']))
						{
							if ($_SESSION['nbCategorie']<$_SESSION['maxCategorie'])
								{
									$_SESSION['action']='creer';
									$noLigne=$_POST['creer'];
								}
						}
					elseif  (!empty($_POST['maj']))
						{
							$_SESSION['action']='maj';
							$noLigne=$_POST['maj'];
						}
					elseif (!empty($_POST['supprimer']))
						{
							$_SESSION['action']='supprimer';
							$noLigne=$_POST['supprimer'];
						}
					else
						{
							$_SESSION['action']='';
						}

						
					if (!empty($_SESSION['action']))
						{
							//echo "L'action à réaliser est : $_SESSION[action] et le numéro de ligne est : $noLigne <br/>";
							actionsCatégorie($_POST['id'.$noLigne], $_POST['ordre'.$noLigne], $_POST['nom'.$noLigne], $_POST['lien'.$noLigne], $_POST['choix'.$noLigne], $_SESSION['action']);
						}
				afficheCatégorie();
?>