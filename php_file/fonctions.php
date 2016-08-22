<?php
/////////////////////////////////AdminDidi/////////////////////////////////
	//fonction de création du tableau des catégories
	function afficheCatégorie()
	{
		//Eléments de connexion
		include ("php_file/commun.php");

		//Nombre maximum de catégories
		$maxCategorie=10;
		$_SESSION['maxCategorie']=$maxCategorie;

		//récupérer les données de la base
		$rq="select * from categorie order by ordreCategorie;";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete affiCategorie récupération des données de la table Catégorie");

		//récupération du nombre de ligne de l'extraction
		$nblignes=mysqli_num_rows($reponse);



		//Création des en-têtes
		echo "
			<FORM method='post' action='adminDidi.php'>
				<p>Catégories ($maxCategorie possibles)</p>
				<table class=''>
					<tr>
						<th>id</th>
						<th>Ordre</th>
						<th>Nom</th>
						<th>Lien</th>
						<th>Actif</th>
					</tr>
				";

				//Création des différentess de lignes
				for ($i=1;$i<=$nblignes+1 and $i<=$maxCategorie;$i++)
					{
						//Test pour afficher les informations de la base disponible puis une ligne de cellules vides
						if ($i<=$nblignes)
							{
								$ligne=mysqli_fetch_assoc($reponse);
								extract($ligne);
								$idCategorieValue=$idCategorie;
								$ordreCategorieValue=$ordreCategorie;
								$nomCategorieValue=$nomCategorie;
								$lienCategorieValue=$lienCategorie;
								$actifCategorieValue=$actifCategorie;
							}
						else
							{
								$idCategorieValue='';
								$ordreCategorieValue='';
								$nomCategorieValue='';
								$lienCategorieValue='';
								$actifCategorieValue='';

							}


						echo"<tr>
								<td class=''><input maxlength='1' size='2' name='id$i' value='$idCategorieValue' readonly></td>
								<td class=''><input maxlength='1' size='4' name='ordre$i' value='$ordreCategorieValue'></td>
								<td class=''><input type='text' name='nom$i' value='$nomCategorieValue'></td>
								<td class=''><input type='text' name='lien$i' value='$lienCategorieValue'></td>
								<td class=''>
									<select name='choix$i' class='listeDeroulante'>";
										//Récupération des valeurs de la base et test pour sélectionner la valeur par défaut
										if ($actifCategorieValue=='OUI')
											{
												echo"<option value='OUI' selected>OUI</option>";
												echo"<option value='NON'>NON</option>";
											}
										else
											{
												echo"<option value='OUI'>OUI</option>";
												echo"<option value='NON' selected>NON</option>";
											}
								echo"
									</select>

								</td>
								<td class=''><button class='buttonAdmin' name='creer' value='$i' type='submit'>Créer</button></td>
								<td class=''><button class='buttonAdmin' name='maj' value='$i' type='submit'>Mettre à jour</button></td>
								<td class=''><button class='buttonAdmin' name='supprimer' value='$i' type='submit'>Supprimer</button></td>
							</tr>";
					}
		echo"	</table>\n
				</FORM>";

	}

	//Fonction de création d'une catégorie
	function actionsCatégorie($iDi, $ordre, $nom, $lien, $actif,$action)
	{
		//Eléments de connexion
		include ("php_file/commun.php");
		$nom=addslashes($nom);
		//echo "La valeur de action est :$action <br/>";

		//Requête de création d'une catégorie dans la base
		if ($action=='creer')
			{
				if (empty($iDi))
					{
						$rq="INSERT INTO categorie VALUES ('','$ordre','$nom','$lien','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creer");
					}
				else
					{
					//Si la ligne contient un id alors action de mise à jour à la place de création
						$rq="UPDATE categorie SET ordreCategorie='$ordre', nomCategorie='$nom', lienCategorie='$lien', actifCategorie='$actif' where idCategorie=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete maj");
					}
			}
		elseif ($action=='maj')
			{
				if (!empty($iDi))
					{
						//mise à jour de la ligne
						$rq="UPDATE categorie SET ordreCategorie='$ordre', nomCategorie='$nom', lienCategorie='$lien', actifCategorie='$actif' where idCategorie=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete maj");
					}
				else
					{
						//creer la catégorie (recopie de l'action creer)
						$rq="INSERT INTO categorie VALUES ('','$ordre','$nom','$lien','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creer");

					}
			}
		elseif ($action=='supprimer')
			{
				if (!empty($iDi))
					{
						$rq="DELETE from categorie where idCategorie=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete supprimer");
					}
			}
		$_SESSION['action']='';

		//echo"$rq<br/>";

			//ajouter une condition sur le nbre de ligne <=$macCategorie

	}

	//Fonction de d'affichage des catégories
	function afficheFamilles()
	{
		//Eléments de connexion
		include ("php_file/commun.php");

		//récupérer les données de la base
		$rq="select * from familles order by idCategorie, ordreFamilles;";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete affiCategorie récupération des données de la table Catégorie");

		//récupération du nombre de ligne de l'extraction
		$nblignes=mysqli_num_rows($reponse);

		//Création des en-têtes
		echo "
			<FORM method='post' action='adminDidi.php'>
				<p>Familles</p>
				<table class=''>
					<tr>
						<th>id</th>
						<th>Ordre</th>
						<th class='listeCategorie'>Catégorie</th>
						<th>Nom</th>
						<th>Actif</th>
					</tr>
				";

				//Création des différentess de lignes
				for ($i=1;$i<=$nblignes+1;$i++)
					{
						//Test pour afficher les informations de la base disponible puis une ligne de cellules vides
						if ($i<=$nblignes)
							{
								//echo "$rq</br>";
								$ligne=mysqli_fetch_assoc($reponse);
								extract($ligne);

								$idFamillesValue=$idFamilles;
								$ordreFamillesValue=$ordreFamilles;
								$idCategorieValue=$idCategorie;
								$nomFamillesValue=$nomFamilles;
								$actifFamillesValue=$actifFamilles;
							}
						else
							{
								$idFamillesValue='';
								$ordreFamillesValue='';
								$idCategorieValue='';
								$nomFamillesValue='';
								$actifFamillesValue='';

							}


						echo"<tr>
								<td class=''><input maxlength='1' size='2' name='idFamilles$i' value='$idFamillesValue' readonly></td>
								<td class=''><input maxlength='3' size='4' name='ordreFamilles$i' value='$ordreFamillesValue'></td>
								<td class=''>
									<select name='idCategorieFamilles$i' class='listeCategorie'>
							";
										//Requête de récupération des informations de la table catégorie
											$rq2="select * from categorie where lienCategorie='' order by ordreCategorie";
											$reponse2=mysqli_query($connexion,$rq2) or die ("Execution impossible-récupération categorie");

											while ($ligne2=mysqli_fetch_assoc($reponse2))
												{

												//Récupération des valeurs de la base et test pour sélectionner la valeur par défaut
												if ($idCategorieValue==$ligne2['idCategorie'])
													{
														echo"<option value=$ligne2[idCategorie] selected>$ligne2[nomCategorie]</option>";
													}
												else
													{
														echo"<option value=$ligne2[idCategorie] >$ligne2[nomCategorie]</option>";
													}
												}

										echo "</select>";


							echo"

								<td class=''><input type='text' name='nomFamilles$i' value='$nomFamillesValue'></td>
								<td class=''>
									<select name='actifFamilles$i' class='listeDeroulante'>";

										//Famille active ou non
										if ($actifFamillesValue=='OUI')
											{
												echo"<option value='OUI' selected>OUI</option>";
												echo"<option value='NON'>NON</option>";
											}
										else
											{
												echo"<option value='OUI'>OUI</option>";
												echo"<option value='NON' selected>NON</option>";
											}
								echo"
									</select>

								</td>
								<td class=''><button class='buttonAdmin' name='creerFamilles' value='$i' type='submit'>Créer</button></td>
								<td class=''><button class='buttonAdmin' name='majFamilles' value='$i' type='submit'>Mettre à jour</button></td>
								<td class=''><button class='buttonAdmin' name='supprimerFamilles' value='$i' type='submit'>Supprimer</button></td>
							</tr>";
					}
		echo"	</table>\n
				</FORM>";

	}

	//Fonction d'actions à réaliser sur la table familles
	function actionsFamilles($iDi, $ordre,$idCat, $nom, $actif,$action)
	{
		//Eléments de connexion
		include ("php_file/commun.php");
		$nom=addslashes($nom);
		//echo "La valeur de action est :$action <br/>";

		//Requête de création d'une catégorie dans la base
		if ($action=='creerFamilles')
			{
				if (empty($iDi))
					{
						$rq="INSERT INTO familles VALUES ('','$ordre',$idCat,'$nom','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerFamilles");
					}
				else
					{
					//Si la ligne contient un id alors action de mise à jour à la place de création
						$rq="UPDATE familles SET ordreFamilles='$ordre', nomFamilles='$nom', idCategorie='$idCat', actifFamilles='$actif' where idFamilles=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majFamilles");
					}
			}
		elseif ($action=='majFamilles')
			{
				if (!empty($iDi))
					{
						//mise à jour de la ligne
						$rq="UPDATE familles SET ordreFamilles='$ordre', nomFamilles='$nom', idCategorie='$idCat', actifFamilles='$actif' where idFamilles=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majFamilles");
					}
				else
					{
						//creer la catégorie (recopie de l'action creer)
						$rq="INSERT INTO familles VALUES ('','$ordre',$idCat,'$nom','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerFamilles");

					}
			}
		elseif ($action=='supprimerFamilles')
			{
				if (!empty($iDi))
					{
						$rq="DELETE from familles where idFamilles=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete supprimerFamilles");
					}
			}
		$_SESSION['action']='';


	}

	//Fonction de d'affichage des sous familles
	function afficheSousFamilles()
	{
		//Eléments de connexion
		include ("php_file/commun.php");

		//récupérer les données de la base
		$rq="select * from sousfamilles order by idFamilles, ordreSousFamilles;";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficheSousFamilles");

		//récupération du nombre de ligne de l'extraction
		$nblignes=mysqli_num_rows($reponse);

		//Création des en-têtes
		echo "
			<FORM method='post' action='adminDidi.php'>
				<p>Sous Familles</p>
				<table class=''>
					<tr>
						<th>id</th>
						<th>Ordre</th>
						<th class='listeCategorie'>Familles</th>
						<th>Nom</th>
						<th>Actif</th>

					</tr>
				";

				//Création des différentess de lignes
				for ($i=1;$i<=$nblignes+1;$i++)
					{
						//Test pour afficher les informations de la base disponible puis une ligne de cellules vides
						if ($i<=$nblignes)
							{
								//echo "$rq</br>";
								$ligne=mysqli_fetch_assoc($reponse);
								extract($ligne);

								$idSousFamillesValue=$idSousFamilles;
								$ordreSousFamillesValue=$ordreSousFamilles;
								$idFamillesValue=$idFamilles;
								$nomSousFamillesValue=$nomSousFamilles;
								$actifSousFamillesValue=$actifSousFamilles;
							}
						else
							{
								$idSousFamillesValue='';
								$ordreSousFamillesValue='';
								$idFamillesValue='';
								$nomSousFamillesValue='';
								$actifSousFamillesValue='';

							}


						echo"<tr>
								<td class=''><input maxlength='1' size='2' name='idSousFamilles$i' value='$idSousFamillesValue' readonly></td>
								<td class=''><input maxlength='3' size='4' name='ordreSousFamilles$i' value='$ordreSousFamillesValue'></td>
								<td class=''>
									<select name='idFamillesSousFamilles$i' class='listeCategorie'>
							";
										//Requête de récupération des informations de la table familles
											$rq2="select * from familles order by ordreFamilles";
											$reponse2=mysqli_query($connexion,$rq2) or die ("Execution impossible-récupération Familles");

											while ($ligne2=mysqli_fetch_assoc($reponse2))
												{

												//Récupération des valeurs de la base et test pour sélectionner la valeur par défaut
												if ($idFamillesValue==$ligne2['idFamilles'])
													{
														echo"<option value=$ligne2[idFamilles] selected>$ligne2[nomFamilles]</option>";
													}
												else
													{
														echo"<option value=$ligne2[idFamilles] >$ligne2[nomFamilles]</option>";
													}
												}

										echo "</select>";


							echo"

								<td class=''><input type='text' name='nomSousFamilles$i' value='$nomSousFamillesValue'></td>
								<td class=''>
									<select name='actifSousFamilles$i' class='listeDeroulante'>";

										//Famille active ou non
										if ($actifSousFamillesValue=='OUI')
											{
												echo"<option value='OUI' selected>OUI</option>";
												echo"<option value='NON'>NON</option>";
											}
										else
											{
												echo"<option value='OUI'>OUI</option>";
												echo"<option value='NON' selected>NON</option>";
											}
								echo"
									</select>

								</td>
								<td class=''><button class='buttonAdmin' name='creerSousFamilles' value='$i' type='submit'>Créer</button></td>
								<td class=''><button class='buttonAdmin' name='majSousFamilles' value='$i' type='submit'>Mettre à jour</button></td>
								<td class=''><button class='buttonAdmin' name='supprimerSousFamilles' value='$i' type='submit'>Supprimer</button></td>
							</tr>";
					}
		echo"	</table>\n
				</FORM>";

	}

	//Fonction d'actions à réaliser sur la table sous familles
	function actionsSousFamilles($iDi, $ordre,$idCat, $nom, $actif,$action)
	{
		//Eléments de connexion
		include ("php_file/commun.php");
		$nom=addslashes($nom);
		//echo "La valeur de action est :$action <br/>";

		//Requête de création d'une catégorie dans la base
		if ($action=='creerSousFamilles')
			{
				if (empty($iDi))
					{
						//Création d'une sous familles
						$rq="INSERT INTO sousfamilles VALUES ('','$ordre',$idCat,'$nom','$actif','');";
            $reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerSousFamilles");
					}
				else
					{
					//Si la ligne contient un id alors action de mise à jour à la place de création
						$rq="UPDATE sousfamilles SET ordreSousFamilles='$ordre', nomSousFamilles='$nom', idFamilles='$idCat', actifSousFamilles='$actif' where idSousFamilles=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majSousFamilles");
					}
			}
		elseif ($action=='majSousFamilles')
			{
				if (!empty($iDi))
					{
						//mise à jour de la ligne
						$rq="UPDATE sousfamilles SET ordreSousFamilles='$ordre', nomSousFamilles='$nom', idFamilles='$idCat', actifSousFamilles='$actif' where idSousFamilles=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majSousFamilles");
					}
				else
					{
						//creer la catégorie (recopie de l'action creer)
						$rq="INSERT INTO sousfamilles VALUES ('','$ordre',$idCat,'$nom','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerSousFamilles");

					}
			}
		elseif ($action=='supprimerSousFamilles')
			{
				if (!empty($iDi))
					{
						$rq="DELETE from sousfamilles where idSousFamilles=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete supprimerSousFamilles");
					}
			}
		$_SESSION['action']='';


	}

	//Fonction de d'affichage des sous Marques
	function afficheMarques()
	{
		//Eléments de connexion
		include ("php_file/commun.php");

		//récupérer les données de la base
		$rq="select * from marques order by nomMarques;";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficheSousFamilles");

		//récupération du nombre de ligne de l'extraction
		$nblignes=mysqli_num_rows($reponse);

		//Création des en-têtes
		echo "
			<FORM method='post' action='adminDidi.php'>
				<p>Marques</p>
				<table class=''>
					<tr>
						<th>id</th>
						<th>Nom</th>
						<th>Actif</th>
					</tr>
				";

				//Création des différentess de lignes
				for ($i=1;$i<=$nblignes+1;$i++)
					{
						//Test pour afficher les informations de la base disponible puis une ligne de cellules vides
						if ($i<=$nblignes)
							{
								//echo "$rq</br>";
								$ligne=mysqli_fetch_assoc($reponse);
								extract($ligne);

								$idMarquesValue=$idMarques;
								$nomMarquesValue=$nomMarques;
								$actifMarquesValue=$actifMarques;
							}
						else
							{
								$idMarquesValue='';
								$nomMarquesValue='';
								$actifMarquesValue='';

							}


						echo"<tr>
								<td class=''><input maxlength='1' size='2' name='idMarques$i' value='$idMarquesValue' readonly></td>
								<td class=''><input type='text' name='nomMarques$i' value='$nomMarquesValue'></td>
								<td class=''>
									<select name='actifMarques$i' class='listeDeroulante'>";

										//Famille active ou non
										if ($actifMarquesValue=='OUI')
											{
												echo"<option value='OUI' selected>OUI</option>";
												echo"<option value='NON'>NON</option>";
											}
										else
											{
												echo"<option value='OUI'>OUI</option>";
												echo"<option value='NON' selected>NON</option>";
											}
								echo"
									</select>

								</td>
								<td class=''><button class='buttonAdmin' name='creerMarques' value='$i' type='submit'>Créer</button></td>
								<td class=''><button class='buttonAdmin' name='majMarques' value='$i' type='submit'>Mettre à jour</button></td>
								<td class=''><button class='buttonAdmin' name='supprimerMarques' value='$i' type='submit'>Supprimer</button></td>
							</tr>";
					}
		echo"	</table>\n
				</FORM>";

	}

	//Fonction d'actions à réaliser sur la table sous Marques
	function actionsMarques($iDi, $nom, $actif, $action)
	{
		//Eléments de connexion
		include ("php_file/commun.php");
		$nom=addslashes($nom);
		//echo "La valeur de action est :$action <br/>";

		//Requête de création d'une catégorie dans la base
		if ($action=='creerMarques')
			{
				if (empty($iDi))
					{
						//Création d'une marque
						$rq="INSERT INTO marques VALUES ('', '$nom','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerMarques");

						//echo"$rq<br/>";
					}
				else
					{
					//Si la ligne contient un id alors action de mise à jour à la place de création
						$rq="UPDATE marques SET nomMarques='$nom', actifMarques='$actif' where idmarques=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majMarques");
					}
			}
		elseif ($action=='majMarques')
			{
				if (!empty($iDi))
					{
						//mise à jour de la ligne
						$rq="UPDATE marques SET nomMarques='$nom', actifMarques='$actif' where idmarques=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majMarques");
					}
				else
					{
						//creer la marque (recopie de l'action creer)
						$rq="INSERT INTO marques VALUES ('', '$nom','$actif');";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerMarques");

					}
			}
		elseif ($action=='supprimerMarques')
			{
				if (!empty($iDi))
					{
						$rq="DELETE from marques where idMarques=$iDi;";
						$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete supprimerMarques");
					}
			}
		$_SESSION['action']='';


	}

	//Fonction de d'affichage des fournisseurs
	function afficheFournisseurs()
	{
		//Eléments de connexion
		include ("php_file/commun.php");

		//récupérer les données de la base
		$rq="select * from fournisseurs order by nomFournisseurs;";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficheSousFamilles");

		//récupération du nombre de ligne de l'extraction
		$nblignes=mysqli_num_rows($reponse);

		//Création des en-têtes
		echo "
			<FORM method='post' action='adminDidi.php'>
				<p>Fournisseurs</p>
				<table class=''>
					<tr>
						<th>id</th>
						<th>Nom</th>
						<th>Actif</th>
					</tr>
				";

				//Création des différentess de lignes
				for ($i=1;$i<=$nblignes+1;$i++)
					{
						//Test pour afficher les informations de la base disponible puis une ligne de cellules vides
						if ($i<=$nblignes)
							{
								//echo "$rq</br>";
								$ligne=mysqli_fetch_assoc($reponse);
								extract($ligne);

								$idFournisseursValue=$idFournisseurs;
								$nomFournisseursValue=$nomFournisseurs;
								$actifFournisseursValue=$actifFournisseurs;
							}
						else
							{
								$idFournisseursValue='';
								$nomFournisseursValue='';
								$actifFournisseursValue='';

							}


						echo"<tr>
								<td class=''><input maxlength='1' size='2' name='idFournisseurs$i' value='$idFournisseursValue' readonly></td>
								<td class=''><input type='text' name='nomFournisseurs$i' value='$nomFournisseursValue'></td>
								<td class=''>
									<select name='actifFournisseurs$i' class='listeDeroulante'>";

										//Famille active ou non
										if ($actifFournisseursValue=='OUI')
											{
												echo"<option value='OUI' selected>OUI</option>";
												echo"<option value='NON'>NON</option>";
											}
										else
											{
												echo"<option value='OUI'>OUI</option>";
												echo"<option value='NON' selected>NON</option>";
											}
								echo"
									</select>

								</td>
								<td class=''><button class='buttonAdmin' name='creerFournisseurs' value='$i' type='submit'>Créer</button></td>
								<td class=''><button class='buttonAdmin' name='majFournisseurs' value='$i' type='submit'>Mettre à jour</button></td>
								<td class=''><button class='buttonAdmin' name='supprimerFournisseurs' value='$i' type='submit'>Supprimer</button></td>
							</tr>";
					}
		echo"	</table>\n
				</FORM>";

	}

	//Fonction d'actions à réaliser sur la table fournisseurs
	function actionsFournisseurs($iDi, $nom, $actif, $action)
{
	//Eléments de connexion
	include ("php_file/commun.php");

	//la fonction addslashes permet d'insérer des données avec ' dans une table
	$nom=addslashes($nom);

	//echo "La valeur de action est :$action <br/>";

	//Requête de création d'une catégorie dans la base
	if ($action=='creerFournisseurs')
		{
			//la fonction addslashes permet d'insérer des données avec ' dans une table
			$nom=addslashes($nom);

			if (empty($iDi))
				{
					//Création d'une marque
					$rq="INSERT INTO fournisseurs VALUES ('', '$nom','$actif');";
					$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerFournisseurs");

					//echo"$rq<br/>";
				}
			else
				{
				//Si la ligne contient un id alors action de mise à jour à la place de création
					$rq="UPDATE fournisseurs SET nomFournisseurs='$nom', actifFournisseurs='$actif' where idFournisseurs=$iDi;";
					$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majFournisseurs");
				}
		}
	elseif ($action=='majFournisseurs')
		{
			if (!empty($iDi))
				{
					//mise à jour de la ligne
					$rq="UPDATE fournisseurs SET nomFournisseurs='$nom', actifFournisseurs='$actif' where idFournisseurs=$iDi;";
					$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete majFournisseurs");
				}
			else
				{
					//creer la marque (recopie de l'action creer)
					$rq="INSERT INTO fournisseurs VALUES ('', '$nom','$actif');";
					$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete creerFournisseurs");

				}
		}
	elseif ($action=='supprimerFournisseurs')
		{
			if (!empty($iDi))
				{
					$rq="DELETE from fournisseurs where idFournisseurs=$iDi;";
					$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete supprimerFournisseurs");
				}
		}
	$_SESSION['action']='';


}

//////////////////////////////////Site visible/////////////////////////////////
	//Affiche le menu de la Home Page
	function afficherMenu()

	{
			//Eléments de connexion
			include ("php_file/commun.php");

			//Requête de récupération des informations
			$rq="SELECT * FROM categorie where actifCategorie='OUI' order by ordreCategorie";
			$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficherMenu");

			//First part with a img for back to home page
			echo"<form method='post' action='produits.php'>
					<div id='menu1Content' class='menuContent'>
						<div class='menu couleurpTitre'>
							<button name='home' class='imgHomeMenuButton'><img src='media_site/home.png' class='imgHomeMenu'></button>
						</div>
					</div>
			";
			while ($ligne=mysqli_fetch_assoc($reponse))
				{
				echo"
						<div id='menu1Content' class='menuContent'>
							<div class='menu couleurpTitre'>
				";

									if (!empty($ligne['lienCategorie']))
										{
											echo"<a href=$ligne[lienCategorie] class='buttonMenu' target='_blank'>$ligne[nomCategorie]</a>";
										}
									else
										{
											echo"<button class='buttonMenu' name='menuHP' value='$ligne[idCategorie]' type='submit'>$ligne[nomCategorie]</button>";
										}
				echo"
							</div>
						</div>
				";
				}
			echo"</form >";

	}

	//Affiche les articles sur la home page en fonction de la rubrique (Nouveautés, Promo...)
	function showArticlesHomePage ($categoryHomePage) {
  	//function's name to have the name of the function in the error's message
  	$functionName=__function__;

  	//Request
  	$rq="select * from articles where etatArticles=$categoryHomePage and homePageArticles=1;";
  	showArticlesFunction($rq, $functionName);
  }



	//Affiche les familles suite à la sélection de la Catégorie
	function afficheFamillesMenu() {
		// Fonction permettant l'affichage des familles au niveau de la homepage
		//Eléments de connexion
		include ("php_file/commun.php");

		$rq="select * from familles where idCategorie=$_SESSION[noCategorie] and actifFamilles='OUI' order by ordreFamilles";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficherMenu");

		echo"<form method='post' action='produits.php'>";
		while ($ligne=mysqli_fetch_assoc($reponse))
			{
			//echo"<button name='nomMenuFamilles' value=$ligne[idFamilles] class='buttonSousMenu'> $ligne[nomFamilles] </button>";
			showMenuFamily('F', $ligne['imagesFamilles'], 'nomMenuFamilles', $ligne['idFamilles'], $ligne['nomFamilles']);

			//ajouter l'image dans la tablet récupérer l'info dans la requête
			}
			echo"</form>";
	}

	//Affiche les sous familles à la suite de la sélection de la Famille
	function afficheSousFamillesMenu() {
		// Fonction permettant l'affichage des sous familles au niveau de la homepage
		//Eléments de connexion
		include ("php_file/commun.php");

		$rq="select * from sousfamilles where idFamilles=$_SESSION[noFamilles] and actifSousFamilles='OUI' order by ordreSousFamilles";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficherMenu");

		//echo "$rq";
		echo"<form method='post' action='produits.php'>";
		while ($ligne=mysqli_fetch_assoc($reponse))
			{
	 			showMenuFamily('SF', $ligne['imagesSousFamilles'], 'nomMenuSousFamilles', $ligne['idSousFamilles'], $ligne['nomSousFamilles']);
			}
		echo"</form>";
	}

	//Show image and button for 'menu famille' and 'menu sous famille'
	function showMenuFamily ($F_SF, $image, $button_name, $button_value, $button_text ) {
			if ($F_SF=='SF')
				{
					$rep_image='media_site/sous_familles/'.$image;
				}
			elseif ($F_SF=='F')
				{
					$rep_image='media_site/familles/'.$image;
				}
			//$rep_image='media_site/sous_familles/1.jpg';
			echo"
				<div class='menu_sous_famille_content'>
					<div class='menu_sous_famille'>
						<div class='image_sous_famille_content'>
							<div class='image_sous_famille'>

								<img src='$rep_image' class='image_sous_famille_dimension'>
							</div>
						</div>
						<div class='button_sous_famille_content'>
							<div class='button_sous_famille'>
								<button name='$button_name' value=$button_value class='buttonSousMenu'>
									$button_text
								</button>
							</div>
						</div>
					</div>
				</div>

			";
	}

	//Affiche les articles suite à la sélection de la sous famille
	function afficheArticlesMenu () {
		//Delete * from table
		//eraseTableContent('filters_brand'); //A replacer et gérer le chargement des données
		//Initialisation of the filters
		//requestAndChargeFiltersTable();

		//function's name to have the name of the function in the error's message
		$functionName=__function__;

		createRequest();/*20160413 and add $_SESSION[add_request_product] in the request */

		//$rq="select * from articles where idSousFamilles=$_SESSION[noSousFamilles]
		//and actifArticles=1 $_SESSION[add_request_product] order by libelleArticles";

		$rq="select * from articles where idSousFamilles=$_SESSION[noSousFamilles]
		and actifArticles=1 order by libelleArticles";

		//Call the function to display articles
		showArticlesFunction($rq, $functionName);
	}

	//Divers
	function compteLigneTable($table) {
		//Eléments de connexion
		include ("php_file/commun.php");

		$rq="select * from $table;";
		//echo "$rq </br>";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficherMenu");
		$valeurRetournée=mysqli_num_rows($reponse);
		return $valeurRetournée;
	}

	function nomNoTable($no, $table) {
		//Eléments de connexion
		include ("php_file/commun.php");
		//Fonction permettant de récupérer le nom d'un élément d'une table à partir de son id
		//passe la première lettre du mot en majuscule
		$tableMaj=ucfirst($table);
		$nomChamp='nom'.$tableMaj;
		$idChamp='id'.$tableMaj;

		$rq="SELECT $nomChamp from $table where $idChamp=$no;";
		$reponse=mysqli_query($connexion,$rq) or die ("Execution impossible de la requete afficherMenu");
		$reponseTable=mysqli_fetch_assoc($reponse);
		$nomNoTable=$reponseTable[$nomChamp];
		return $nomNoTable;
		//echo "La requête : <br/> $rq";
	}

	function popupMessage($message)
{
	echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}

//////////////////////////////////Embedded function/////////////////////////////////

//Function to display articles (call by an other function)
function showArticlesFunction($rq, $functionName) {
	//Connexion informations
	include ("php_file/commun.php");

	$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");

	echo"<form method='post' action='produits.php'>";
		while ($ligne=mysqli_fetch_assoc($reponse))
			{
				$libelleArticles=utf8_encode($ligne['libelleArticles']);
				$imageArticle='media_site/produits/'.$ligne['imagesArticles1'];
			echo"

				<div class='articlesContent'>
				<div class='imageArticlesContent'>
					<div class='imageArticles'>
						<img src=$imageArticle class='imagesArticlesClass' alt='$ligne[libelleArticles]'>
					</div>
				</div>

				<div class='libelleArticlesContent'>
					<div class='libelleArticles'>
						<p class='texteArticles'>$libelleArticles</p>
					</div>
				</div>
				<div class='prixStockContent'>
					<div class='prixArticles'>
			";

				//Add an if to save the promotion price or the normal price
				if ($ligne['tauxPromoArticles']>0)
					{
						$prix_promo=($ligne['prixVenteArticles']*(100-$ligne['tauxPromoArticles'])/100);
						$prix_promo=number_format($prix_promo,2,',','');

						echo "
							<p class='textePrixArticles prixArticles_barre'>$ligne[prixVenteArticles] €  </p>
							<p class='textePrixArticles prixArticlesPromo'>$prix_promo €</p>
						";
					}
				else
					{
						echo"<p class='texteArticles'>$ligne[prixVenteArticles] €</p>";
					}


			echo"
					</div>

			";
					//Limit to 'derniére(s) piéce(s)
					$limitStock=1;
					if ($ligne['stockArticles']>$limitStock)
						{
							//<p class='texteArticles'>Stock : $ligne[stockArticles]</p>
							echo"
									<div class='stockArticles'>
										<p class='p_en_stock'>Produit disponible</p>
									</div>
								</div>
									<div class='ajouterPanierContent'>
										<div class='ajouterPanier'>
											<button name='addBasket' id='$ligne[referenceArticles]' value='$ligne[referenceArticles]' class='buttonAjouterPanier'>Ajouter au panier</button>

										</div>
									</div>
							";
						}
					elseif ($ligne['stockArticles']>0 and $ligne['stockArticles']<=$limitStock)
						{
							echo"
									<div class='stockArticles'>
										<p class='p_en_stock_limit'>Derniére piéce</p>
									</div>
								</div>
									<div class='ajouterPanierContent'>
										<div class='ajouterPanier'>
											<button name='addBasket' id='$ligne[referenceArticles]' value='$ligne[referenceArticles]' class='buttonAjouterPanier'>Ajouter au panier</button>
										</div>
									</div>
							";
						}

					else
						{
									// en orange (Hexa)
									//The button name addBasketRupture isn't use into the form to have no action with it.
							echo"
									<div class='stockArticles'>
										<p class='p_en_rupture'>Rupture temporaire</p>
									</div>
								</div>
									<div class='ajouterPanierContent'>
										<div class='ajouterPanier'>
											<button name='addBasketRupture' value='$ligne[referenceArticles]' class='buttonAjouterPanierRupture'>Bientôt disponible</button>
										</div>
									</div>
								";
						}

			echo"
			</div>
			";
			}
	echo"</form>";
}

//////////////////////////////////Draft Function/////////////////////////////////
//Request ti charge the filters table

//Delete everythings of the table
function eraseTableContent($NameTable) {
	//Connexion informations
	include ("php_file/commun.php");

	$functionName=__function__;

	//Permet de récupérer la liste des idMarques de la table articles
	$rq="DELETE FROM $NameTable";
	$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");

}

//Charge informations into the table
function requestAndChargeFiltersTable () {
	//Connexion informations
	include ("php_file/commun.php");

	$functionName=__function__;
	//For the numeration of the id of the table filters
	$idFilters=1;

	//Permet de récupérer la liste des idMarques de la table articles
	//$rq="select DISTINCT(idMarques) from articles";
	$rq="select DISTINCT(a.idMarques), m.nomMarques from articles a, marques m WHERE m.idMarques=a.idMarques;";

	$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
	while ($ligne=mysqli_fetch_assoc($reponse))
		{
			//popupMessage($ligne['idMarques'].'---'. $ligne['nomMarques']);
			$nomMarques=addslashes($ligne['nomMarques']);

			$rq2="INSERT INTO filters_brand VALUES ($idFilters,$ligne[idMarques], '$nomMarques',0)";

			//popupMessage($rq2);
			$reponse2=mysqli_query($connexion,$rq2) or die ("Request's Error... Insert data in table");
			$idFilters=$idFilters+1;
		}

}

//Display differents buttons
function displayButtonFilters($tableFilters, $id, $name) {
	//Connexion informations
	include ("php_file/commun.php");
	$functionName=__function__;

	$rq="SELECT * FROM $tableFilters";
	$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
	while ($ligne=mysqli_fetch_assoc($reponse))
		{
			if ($ligne['active']==0)

				{
					echo "<button value =$ligne[$id] name=$tableFilters class='buttonSelectedFilter'>$ligne[$name]</button>\n";
					//popupMessage('Active = 0');
				}
			else
				{
					echo "<button value =$ligne[$id] name=$tableFilters class='buttonAvailableFilter'>$ligne[$name]</button>\n";
				}
		}


}
	//select DISTINCT(idMarques) from articles; Permet de récupérer la liste des idMarques de la table articles

	//Récupérer les infos sur les plages de prix

	//Récupérer les infos sur les disponiblités

	//1.Charger la table filters avec les différents id
	//insert INTO filters VALUES ('',1,0);

	//Ajouter les filtres en stock ou sur commande

	//Ajouter les filtres sur les tranches de CA (0-5, 5-10,10-15, Sup 15)

	//Sélectionner les articles en fonction des différents filtres à 1 dans la table filters
	//select idArticles, idMarques from articles where idMarques=1 or idMarques=2

//update table fonction of value of the clicked button
function update_filters_table($table, $value, $id)
	{

		//popupMessage('La table a modifier est '.$table.' et le champ à modifier est le :'.$value);
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		//Collect the information of active statut
		$rq="select active from $table where $id=$value";
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$ligne=mysqli_fetch_assoc($reponse);
		$active_valeur=$ligne['active'];
		//popupMessage($message);

		if ($active_valeur==0)
			{
				$active_valeur=1;
			}
		else
			{
				$active_valeur=0;
			}

		$rq="UPDATE $table SET active = $active_valeur WHERE $id= $value;";
		//popupMessage($rq);
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");


	}

function sousFamille_number()
	{
		//Connexion informations
		include ("php_file/commun.php");

		//function's name to have the name of the function in the error's message
		$functionName=__function__;

		$rq="select * from articles where idSousFamilles=$_SESSION[noSousFamilles] and actifArticles=1 order by libelleArticles";//recopie de la requête afficheArticlesMenu
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$_SESSION['nb_articles_display']=mysqli_num_rows($reponse);

		echo "
		<div id='sousFamille_number'>
			<p class='sousFamille_number'>$_SESSION[sousFamilleSelected] $_SESSION[nb_articles_display] articles</p>
		</div>
		";
	}

//Create the request of article table
function createRequest()
	{
		//Empty the Session's variable
		$_SESSION['add_request_product']="";

		//Connexion informations
		include ("php_file/commun.php");

		$functionName=__function__;

		//for the table : filters_stock
		$rq="select idFiltersStock from filters_stock where active=1;";

		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		while ($ligne=mysqli_fetch_assoc($reponse))
			{
				if  ($ligne['idFiltersStock']==1)
					{
						$_SESSION['add_request_product']="and (stockArticles>0)";
					}
				elseif ($ligne['idFiltersStock']==2)
					{
						if ($_SESSION['add_request_product']=="and (stockArticles>0)")
							{
								$_SESSION['add_request_product']="and (stockArticles>0 and stockArticles=0)";
							}
						else
							{
								$_SESSION['add_request_product']="and (stockArticles=0)";
							}

					}
				else
					{
						$_SESSION['add_request_product']="and () ";
					}

			}
		//popupMessage($_SESSION['add_request_product']);
	}

//Function to save client information un session_table table
function saveSessionInformation($noSession, $navigateurClient, $localisationClient)
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$dateTime=date('Y-m-d H:i:s');

		//popupmessage($dateTime);

		$rq="INSERT INTO session_table VALUES ('','$dateTime', '$noSession', '$navigateurClient', '$localisationClient')";
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");

	}

function createCommande($sessionInformation)
	{
		//Create a command for every client when he open the website
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

    $dateTime=date('Y-m-d H:i:s');

		$rq="INSERT INTO commande VALUES ('','$sessionInformation', '', '', '', '$dateTime', '', '', '', '', '', '', '','')";
    //popupmessage($rq);
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
	}
//20160807 Create request
function updateCommande($champ, $value)
	{
    include ("php_file/commun.php");
    $functionName=__function__;

    $idCommande = $_SESSION['idCommande'];

    $rq = "UPDATE commande SET $champ = '$value' WHERE idCommande = $idCommande;";
    mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
	}

//20160807
function numberOrderByState($id_etat)
  {
    include ("php_file/commun.php");
    $functionName=__function__;

    $rq = "SELECT * FROM commande WHERE etatCommande = $id_etat;";
    $reponse = mysqli_query($connexion, $rq) or die ("Request's Error... $FunctionName");
    $number_rows = mysqli_num_rows($reponse);
    echo"$number_rows";
  }

function listOfOrderByState($id_etat)
{
  include ("php_file/commun.php");
  $functionName=__function__;

  $rq = "SELECT * FROM commande WHERE etatCommande = $id_etat;";
  $reponse = mysqli_query($connexion, $rq) or die ("Request's Error... $FunctionName");
  // while {$listOfOrder = mysqli_fetch_assoc($reponse);

  // }
}

function createPanier($sessionInformation)
	{
		//Create a 'panier' for every client when he open the website
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		//Collect the id of the Commande
		$rq="SELECT idCommande FROM commande where idSessionClient = '$sessionInformation';";
		//popupmessage($rq);
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$idCommande=mysqli_fetch_assoc($reponse);
		$idCommande=$idCommande['idCommande'];
		$_SESSION['idCommande']=$idCommande;

		//popupmessage($idCommande);

		$rq="INSERT INTO panier VALUES ('','$idCommande', '', '')";
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");

	}

function updatePanier($refArticle, $idCommande)
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$rq="INSERT INTO panier VALUES ('','$idCommande', '$refArticle', 1)";
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");

		countBasket();

    echo"<script> window.location.href= '#$refArticle';</script>";
	}

function countBasket()
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		//Initialize variable
		$_SESSION['count_basket']=0;

		$rq="select sum(quantiteArticles) as nbArticle from panier where idCommande=$_SESSION[idCommande];";

		//popupMessage($rq);

		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$reponse=mysqli_fetch_assoc($reponse);
		$nbArticle=$reponse['nbArticle'];

		$_SESSION['count_basket']=$nbArticle;

		$rq2="select SUM((a.prixVenteArticles * (100-a.tauxPromoArticles))/100) as sumArticles from panier p, articles a where p.referenceArticles=a.referenceArticles and idCommande=$_SESSION[idCommande];";

		//popupMessage($rq2);

		$reponse2=mysqli_query($connexion,$rq2) or die ("Request's Error... $functionName");
		$reponse2=mysqli_fetch_assoc($reponse2);
		$sumArticles=$reponse2['sumArticles'];

		$_SESSION['total_basket']=number_format($sumArticles,2,',','');

		//popupMessage('Toto ='.$nbArticle.' '.$sumArticles);
	}

function showBasket ()
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		echo"
		<div id='basketDivContent'>
			<div id='basketDiv'>
				<FORM method='post' action='produits.php'>
					<table>
						<tr class='tr_title'>
							<td colspan='6'>
								<p>Mon panier</p>
							</td>
						</tr>
						<tr>
							<th></th>
							<!--<th>Référence</th>-->
							<th>Désignation</th>
							<th>Prix unitaire</th>
							<th>Quantité</th>
							<th>Prix total</th>
							<th></th>
						</tr>
					";

						$prixTotalPanier=0;
						$prixTotalPanierFraisPort=0;
						$poidsArticlesPanier=0;
						$prixChoisiFraisPort=0;

						$rq="select a.imagesArticles1 as image, p.referenceArticles as ref, a.libelleArticles as libelle, ((a.prixVenteArticles * (100-a.tauxPromoArticles))/100) as prixDeVenteArticles, sum(a.poidsArticles) as poidsArticlesPanier, sum(p.quantiteArticles) as nbArticles, SUM(((a.prixVenteArticles * (100-a.tauxPromoArticles))/100)) as prixArticles from panier p, articles a where p.referenceArticles=a.referenceArticles and p.idCommande=$_SESSION[idCommande] group by p.referenceArticles order by p.idPanier;";

						$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
						while ($ligne=mysqli_fetch_assoc($reponse))
							{
								$prixVente=number_format($ligne['prixDeVenteArticles'],2,',','');
								$prixVenteTotal=number_format($ligne['prixArticles'],2,',','');

								$prixTotalPanier = $prixTotalPanier + $ligne['prixArticles'];

								$poidsArticlesPanier=$poidsArticlesPanier + $ligne['poidsArticlesPanier'];

								$imageBasket='media_site/produits/'.$ligne['image'];
								//popupMessage($imageBasket);
								$libelleArticles=utf8_encode($ligne['libelle']);

								echo "
									<tr>
										<td><img class='basketImage' src='$imageBasket' ></td>
										<!--<td>$ligne[ref]</td>-->
										<td class='td_libelle'><p class='basketText'>$libelleArticles</p> <p class='basketTextReference'>$ligne[ref]</p></td>
										<td class='td_others'>$prixVente</td>
										<td class='td_others'>
											<button name='buttonLess' class='lessMoreLeft' value='$ligne[ref]'>-</button>
											<button class='quantityBasket'>$ligne[nbArticles]</button>
											<button name='buttonMore' class='lessMoreRight' value='$ligne[ref]'>+</button>
										</td>
										<td class='td_others'>$prixVenteTotal €</td>
										<td>
											<button name='basketBinButton' class='basketBinButton' value='$ligne[ref]'>
												<img src='media_site/bin_pink.png' class='basketBin'>
											</button>
										</td>
									</tr>



								";
							}


								//popupMessage($poidsArticlesPanier);
								$prix_fdp_home=number_format(shipping($poidsArticlesPanier, "home"),2,',','');

								$prix_fdp_salon=number_format(shipping($poidsArticlesPanier, "salon"),2,',','');

								$prix_fdp_suivi=number_format(shipping($poidsArticlesPanier, "suivi"),2,',','');

								$prix_fdp_colissimo=number_format(shipping($poidsArticlesPanier, "colissimo"),2,',','');

								if (isset($_SESSION['shippingPrice']))
									{
										$prixChoisiFraisPort = $_SESSION['shippingPrice'];
									}

								$prixTotalPanierFraisPort = $prixTotalPanier + $prixChoisiFraisPort;

								$prixTotalPanier=number_format($prixTotalPanier,2,',','');
								$prixTotalPanierFraisPort=number_format($prixTotalPanierFraisPort,2,',','');
								$_SESSION['prixTotal']=$prixTotalPanierFraisPort;


								//$prixChoisiFraisPort=number_format($prixChoisiFraisPort,2,',','');

								$td_class_alert_shipping=$_SESSION['td_class_alert_shipping'];
								$td_class_alert_payement=$_SESSION['td_class_alert_payement'];
					echo "
					<tr>
						<td colspan='6'>
						</td>
					</tr>

					<tr>
						<td colspan='2'>
						</td>
						<td colspan='2' class='td_others'>
								Total produits
						</td>
						<td class='td_others'>
							$prixTotalPanier €
						</td>
						<td></td>
					</tr>

					<tr class='tr_title'>
						<td colspan='6'>
							<p>Choix du mode de livraison</p>
						</td>
					</tr>
					<tr>
						<td></td>
						<td class=$td_class_alert_shipping>
						";

								$shippingTest=$_SESSION['shippingSelected'];
								if ($shippingTest=='home')
									{
									echo"<button class='buttonFraisPortSelected' name='shippingHome' value='$prix_fdp_home'>";
									}
								else
									{
									echo "<button class='buttonFraisPort' name='shippingHome' value='$prix_fdp_home'>";
									}
						echo"
								<img class='imgButtonFraisPort' src='media_site/home.png'>
								Récupérer à domicile $prix_fdp_home €
							</button>
						";

								$shippingTest=$_SESSION['shippingSelected'];
								if ($shippingTest=='salon')
									{
									echo"<button class='buttonFraisPortSelected' name='shippingSalon' value='$prix_fdp_salon'>";
									}
								else
									{
									echo "<button class='buttonFraisPort' name='shippingSalon' value='$prix_fdp_salon'>";
									}
						echo"
								<img class='imgButtonFraisPort' src='media_site/salon.png'>
								Récupérer sur un salon $prix_fdp_salon €
							</button>
						</td>
						<td></td>
						<td colspan='3'></td>
					</tr>
					<tr>
						<td></td>
						<td class=$td_class_alert_shipping>
						";

								$shippingTest=$_SESSION['shippingSelected'];
								if ($shippingTest=='suivi')
									{
									echo"<button class='buttonFraisPortSelected' name='shippingSuivi' value='$prix_fdp_suivi'>";
									}
								else
									{
									echo "<button class='buttonFraisPort' name='shippingSuivi' value='$prix_fdp_suivi'>";
									}
						echo"
									<img class='imgButtonFraisPort' src='media_site/lettre_suivie.jpg'>
									Courrier suivi $prix_fdp_suivi €
								</button>
						";

								$shippingTest=$_SESSION['shippingSelected'];
								if ($shippingTest=='colissimo')
									{
									echo"<button class='buttonFraisPortSelected' name='shippingColissimo' value='$prix_fdp_colissimo'>";
									}
								else
									{
									echo "<button class='buttonFraisPort' name='shippingColissimo' value='$prix_fdp_colissimo'>";
									}
						//Put information into a variable
						$shippingChoice=$_SESSION['shippingSelectedText'];
						$payementChoice=$_SESSION['payementChoiceText'];
						echo"
								<img class='imgButtonFraisPort' src='media_site/colissimo.jpg'>
								Colissimo $prix_fdp_colissimo €
							</button>
						</td>

						<td colspan='3' class='td_others'>
							<i>Choix : $shippingChoice</i>
						</td>
						<td></td>
					</tr>

					<tr>
						<td colspan='2'>
						</td>
						<td colspan='2'class='td_others'>
								Total frais de port
						</td>
						<td class='td_others'>
							$prixChoisiFraisPort €
						</td>
						<td></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td colspan='2'>
						</td>
						<td colspan='2'class='td_total'>
								Total commande
						</td>
						<td class='td_total'>
							$prixTotalPanierFraisPort €
						</td>
						<td></td>
					</tr>
					<tr class='tr_title'>
						<td colspan='6'>
							<p>Choisissez votre moyen de paiement</p>
						</td>
					</tr>
					<tr>
						<td></td>
						<td class='$td_class_alert_payement'>
					";
							if ($_SESSION['payementChoice']=='espece')
								{
									echo"<button class='buttonFraisPortSelected' name='payementChoice' value='espece'>";
								}
							else
								{
									echo"<button class='buttonFraisPort' name='payementChoice' value='espece'>";
								}
					echo"
										<img class='imgButtonFraisPort' src='media_site/picto_monnaie.png'>
										Espéces
								</button>

					";
							if ($_SESSION['payementChoice']=='cheque')
								{
									echo"<button class='buttonFraisPortSelected' name='payementChoice' value='cheque'>";
								}
							else
								{
									echo"<button class='buttonFraisPort' name='payementChoice' value='cheque'>";
								}
					echo"

								<img class='imgButtonFraisPort' src='media_site/picto_cheque.png'>
								Chéque
							</button>
						</td>
						<td></td>
						<td colspan='2'>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td class='$td_class_alert_payement'>
					";
							if ($_SESSION['payementChoice']=='paypal')
								{
									echo"<button class='buttonFraisPortSelected' name='payementChoice' value='paypal'>";
								}
							else
								{
									echo"<button class='buttonFraisPort' name='payementChoice' value='paypal'>";
								}
					echo"

								<img class='imgButtonFraisPort' src='media_site/picto_paypal.jpg'>
									Paypal
							</button>

						</td>
						<td></td>
						<td colspan='3'>
							<i>Mode de réglement : $payementChoice</i>
						</td>
					</tr>
					<tr>
						<td colspan='3'></td>
						<td colspan='2'>
							<button class='buttonPasserCommande' name='valider_commande'>
								Passer commande
							</button>
						</td>
						<td></td>
					</tr>
					</table>
				</FORM>
			</div>
		</div>
		";

	}

function updateValidatedBasket()
{
  //Connexion informations
  include ("php_file/commun.php");
  $functionName=__function__;

  $idC = $_SESSION['idCommande'];
  $shippingText = $_SESSION['shippingSelectedText'];
  $payement = $_SESSION['payementChoiceText'];
  $idCli = $_SESSION['idClient'];
  $shippingPrice = str_replace(',', '.', $_SESSION['shippingPrice']);


  $rq = "UPDATE commande SET idClient = $idCli ,payement = '$payement', shippingMode = '$shippingText', shippingPrice = '$shippingPrice' WHERE idCommande = $idC";
  mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
}


function deleteArticle($refArticle, $idCommande)
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$rq="DELETE FROM panier WHERE idCommande=$idCommande and referenceArticles='$refArticle';";

		//popupMessage($rq);

		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");

		countBasket();
	}

	//Count number of articles in a request of the basket 'panier'
	function countBasketArticle($idCommande, $refArticle)
		{
			//Connexion informations
			include ("php_file/commun.php");
			$functionName=__function__;

			$rq="SELECT '$refArticle' FROM panier where referenceArticles='$refArticle' and idCommande='$idCommande'; ";
			$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
			$numberOfArticles=mysqli_num_rows($reponse);
			return $numberOfArticles;
		}

function deleteOneArticle ($idCommande, $refArticle)
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$rq="SELECT idPanier FROM panier where referenceArticles='$refArticle' and idCommande='$idCommande' LIMIT 1; ";
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$ligne=mysqli_fetch_assoc($reponse);
		$idPanier=$ligne['idPanier'];

		//popupMessage($idPanier);

		$rq2="DELETE FROM panier WHERE idCommande=$idCommande and referenceArticles='$refArticle' and idPanier='$idPanier';";
		$reponse2=mysqli_query($connexion,$rq2) or die ("Request's Error... $functionName");

		countBasket();
	}

function shipping ($weight, $shipping_type )
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$shipping_table="fdp_" . $shipping_type;

		//popupMessage($shipping_table);

		$rq="select prixFraisPort from $shipping_table where poidsFraisPort > $weight LIMIT 1;";

	//	popupMessage($rq);
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$ligne=mysqli_fetch_assoc($reponse);
		$shippingPrice=$ligne['prixFraisPort'];

		return $shippingPrice;

	}


//Function to test existing account
function check_existing_mail($mail)
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;
		$rq="select * from client where emailClient='$mail'";
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$ligne=mysqli_fetch_assoc($reponse);
		$nblignes=mysqli_num_rows($reponse);

		if ($nblignes>0)
		//Ok if mail is correct
			{
				$_SESSION['idClient']=$ligne['idClient'];
				$idClient=$_SESSION['idClient'];
				//popupMessage("Votre compte existe : ".$idClient);

				//mail is already into a session's variable $_SESSION['mailClient']

				$_SESSION['mailExist']='yes';
				//Open the account's function
				if (isset($_POST['submitAccountUnknow']))
					{
						popupMessage('Ce mail est déjà utilisé');
					}


			}
		else
			{
				$_SESSION['mailExist']='no';
				//If mail doesn't existe, create the customer with the mail and collect id
				$dateTime=date('Y-m-d H:i:s');
				$rq2="INSERT INTO client VALUES ('','$dateTime','','','','','','','','','$mail','','','');";
				$reponse2=mysqli_query($connexion,$rq2) or die ("Request's Error... $functionName");

				$rq="select * from client where emailClient='$mail'";
				$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
				$ligne=mysqli_fetch_assoc($reponse);
				$_SESSION['idClient']=$ligne['idClient'];

				//Reset variable's session
				$_SESSION['prenom']='';
				$_SESSION['nom']='';
				$_SESSION['adresse']='';
				$_SESSION['codePostalClient']='';
				$_SESSION['villeClient']='';
				$_SESSION['telClient']='';
				$_SESSION['birthdayDate']='';

				//return false;
			}

	}

//Test account with mail and password
function check_account($mail, $password)
	{
		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$rq="select * from client where emailClient='$mail' and password='$password';";
		//popupmessage($rq);
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		$nblignesAccount=mysqli_num_rows($reponse);

		$ligne=mysqli_fetch_assoc($reponse);

		//Initialize the session's variable to 'no'
		$_SESSION['connected']='no';


		if ($nblignesAccount==1)
			//Account is existing
			{
				$prenom=$ligne['prenomClient'];
				$_SESSION['prenom']=$prenom;

				$nom=$ligne['nomClient'];
				$_SESSION['nom']=$nom;

				$adresse=$ligne['adresseClient'];
				$_SESSION['adresse']=$adresse;

				$cp=$ligne['codePostalClient'];
				$_SESSION['codePostalClient']=$cp;

				$ville=$ligne['villeClient'];
				$_SESSION['villeClient']=$ville;

				$tel=$ligne['telClient'];
				$_SESSION['telClient']=$tel;

				$birthdayDate=$ligne['birthdayDate'];
				$_SESSION['birthdayDate']=$birthdayDate;

				$_SESSION['connected']='yes';

				//return true;
				account();
				//include ("php_file/valider_panier_2.php");
				//popupMessage('check_account');

			}
		else
			{
			//check_existing_mail($mail);
			//$message=$_SESSION['mailExist'];
			//popupMessage($message);

			if ($_SESSION['mailExist']=='yes')
				{
					popupMessage('Mot de passe non valide');
					include ("php_file/my_account.inc");
				}
			else
				{
					//return false;
					popupMessage('Vous n\'avez pas de compte');
					include ("php_file/my_account.inc");
				}
			}
	}

//Function to create or update account
function updateClient()
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$mailClient=$_POST['mailClient'];
		$namePassword=$_POST['namePassword'];
		$adresse=$_POST['adresse'];
		$cp=$_POST['cp'];
		$ville=$_POST['ville'];
		$mobile_phone=$_POST['mobile_phone'];
		$birthday=$_POST['birthday'];

		//Connexion informations
		include ("php_file/commun.php");
		$functionName=__function__;

		$idClient=$_SESSION['idClient'];

		$rq="UPDATE client SET nomClient='$nom', prenomClient='$prenom', emailClient='$mailClient', password='$namePassword', adresseClient='$adresse', codePostalClient='$cp', villeClient='$ville', telClient='$mobile_phone', birthdayDate='$birthday' WHERE idClient=$idClient;";
		//popupMessage($rq);
		$reponse=mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
		//$ligne=mysqli_fetch_assoc($reponse);

	}

//Function account
Function account()
{
	$mailClient=$_SESSION['mailClient'];

	$prenom=$_SESSION['prenom'];
	$nom=$_SESSION['nom'];
	$adresse=$_SESSION['adresse'];
	$cp=$_SESSION['codePostalClient'];
	$ville=$_SESSION['villeClient'];
	$tel=$_SESSION['telClient'];
	$birthdayDate=$_SESSION['birthdayDate'];

	echo"
	<form method='post' action='produits.php'>
	<div class='divAccountContent'>
			<div id='divAccount'>
				<p>Veuillez renseigner les différents champs</p>
				<input name='nom' class='input_css' placeholder='Nom' required='required' value=$nom></input>
				<input name='prenom' class='input_css' placeholder='prénom' required='required' value=$prenom></input>
				<br/>
				<input
					name='mailClient'
					class='input_css'
					id='mailClient'
					type='mail'
					value=$mailClient
				></input>

				<input name='namePassword' class='input_css' type='password' placeholder='Votre mot de passe' required='required'></input>
				<!--<input name='namePassword' class='input_css' type='password' placeholder='Retapez votre mot de passe' required='required'>-->
				<br/>
				<input name='adresse' class='input_css' id='adresse' placeholder='Adresse' required='required' value=$adresse></input>
				<br/>
				<input name='cp' class='input_css' id='code_postal' type='' placeholder='CP' required='required' value=$cp></input>

				<input name='ville' class='input_css' id='ville' placeholder='Ville' required='required'value=$ville></input>
				<br/>
				<input name='mobile_phone' class='input_css' id='mobile_phone' type='tel' placeholder='Portable' value=$tel></input>
				<input name='birthday' class='input_css' id='birthday' type='datetime' placeholder='Un petit cadeau ? Notez votre date anniversaire ;)' value=$birthdayDate ></input>
				<br/>
				<button name='submitAccount' class='input_css' id='submitCompte' type='submit'>Mettre à jour</button>


			</div>
	</div>
</form>
";}

function procedure_reglement($payement)
	{
		if ($payement=='espece')
			{
				echo"<p>Ici sera présenté la procédure pour le réglément en espèces</p>";
			}
		elseif ($payement=='cheque')
			{
				echo"<p>Ici sera présenté la procédure pour le réglément en chèques</p>";
			}
		elseif ($payement=='paypal')
			{
				echo"<p>Ici sera présenté la procédure pour le réglément via paypal</p>";
			}
	}

function connected_message()
	{
		$prenom_client=$_SESSION['prenom'];
		echo"
			<div class='messageDivContent'>
				<div class='messageDiv'>
					<p>$prenom_client, vous êtes maintenant connecté(e) vous pouvez continuer votre shopping... ;o)
				</div>
			</div>
		";
	}

function display_information_on_order($etatCommande)
  {
    //Connexion informations
    include ("php_file/commun.php");
    $functionName=__function__;

    $rq = "SELECT * FROM commande c JOIN client cl ON c.idClient = cl.idClient WHERE etatCommande = $etatCommande ";

    $reponse=mysqli_query($connexion,$rq) or die ("Execution impossible-récupération categorie");

    while ($ligne=mysqli_fetch_assoc($reponse))
      {
        $total_basket = total_basket($ligne['idCommande']);
        echo"
          <tr>
            <td>$ligne[dateCommande]</td>
            <td>$ligne[idCommande]</td>
            <td>$ligne[nomClient]</td>
            <td>$total_basket</td>
            <td>$ligne[payement]</td>
            <td>$ligne[shippingMode]</td>
        ";
        if ($etatCommande >= 2)
          {
          echo"
            <td>$ligne[preparation_date]</td>
          ";
          };
          if ($etatCommande >= 3)
          {
            echo"
              <td>$ligne[wait_date]</td>
              <td>$ligne[waiting_pattern]</td>
            ";
          };
        echo"
              <td class=''>
                <form method='post' action='order_detail.php'>
                  <input name='idCommande' value='$ligne[idCommande]' type='hidden'/>
                  <input name='idClient' value='$ligne[idClient]' type='hidden'/>
                  <input name='shippingMode' value='$ligne[shippingMode]' type='hidden'/>

                  <input name='shippingMode' value='$ligne[shippingMode]' type='hidden'/>

                  <input name='waiting_pattern' value='$ligne[waiting_pattern]' type='hidden'/>

                  <button name='' class='button-css'>
                    <i class='fa fa-search-plus' aria-hidden='true'></i>
                  </button>
                </form>
              </td>
          </tr>
        ";
      }
  }

function total_basket($idCommande)
{
  //Connexion informations
  include ("php_file/commun.php");
  $functionName=__function__;

  $rq = "SELECT sum(a.prixVenteArticles) as total_basket FROM panier p JOIN commande c ON p.idCommande = c.idCommande JOIN articles a ON p.referenceArticles = a.referenceArticles WHERE p.idCommande = $idCommande;";
  $reponse = mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
    $ligne = mysqli_fetch_assoc($reponse);
    return $ligne['total_basket'];
}

function details_customer($idClient)
{
  //Connexion informations
  include ("php_file/commun.php");
  $functionName=__function__;

  $rq="SELECT * FROM client WHERE idClient = $idClient;";
  $reponse = mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
    $ligne = mysqli_fetch_assoc($reponse);
    echo"
     <p>$ligne[nomClient] $ligne[prenomClient] | $ligne[birthdayDate]</p>
     <p>$ligne[adresseClient]</p>
     <p>$ligne[complementAdresseClient]</p>
     <p>$ligne[codePostalClient] $ligne[villeClient]</p>
     <p>$ligne[emailClient] | $ligne[telClient]</p>
    ";
}

function waiting_pattern_sentence($idWaiting)
{
  //Connexion informations
  include ("php_file/commun.php");
  $functionName=__function__;

  $rq="SELECT waiting_pattern FROM waiting_patterns WHERE id = $idWaiting;";
  $reponse = mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
    $ligne = mysqli_fetch_assoc($reponse);
    echo"
      <p>Motif de mise en attente :
        $ligne[waiting_pattern]
      </p>";
}

function list_article_commande($idCommande)
{
  //Connexion informations
  include ("php_file/commun.php");
  $functionName=__function__;

  $rq="SELECT a.imagesArticles1, a.descriptionArticles, a.referenceArticles, a.libelleArticles, a.prixVenteArticles, sum(p.quantiteArticles) as quantiteArticles, a.prixVenteArticles, a.stockArticles   FROM articles a JOIN panier p ON a.referenceArticles = p.referenceArticles WHERE idCommande = $idCommande GROUP BY a.referenceArticles;";
  $reponse = mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
    while ($ligne=mysqli_fetch_assoc($reponse))
      {
      echo"
        <tr>
          <td><img src='media_site/produits/$ligne[imagesArticles1]' class='picture-order' alt='$ligne[descriptionArticles]'></td>
          <td>$ligne[referenceArticles]</td>
          <td>$ligne[libelleArticles]</td>
          <td>$ligne[prixVenteArticles]</td>
          <td>$ligne[quantiteArticles]</td>
          <td>
      ";
          $total = $ligne['quantiteArticles'] * $ligne['prixVenteArticles'];
      echo"
          $total €</td>
          <td>$ligne[stockArticles]</td>
          <td><i class='fa fa-check-square-o' aria-hidden='true'></i>
          </td>
        </tr>
      ";
      }
}

function shipping_price ($idCommande)
{
  //Connexion informations
  include ("php_file/commun.php");
  $functionName=__function__;

  $rq="SELECT shippingPrice FROM commande WHERE idCommande = $idCommande;";
  $reponse = mysqli_query($connexion,$rq) or die ("Request's Error... $functionName");
  $ligne = mysqli_fetch_assoc($reponse);
  $_SESSION['shippingPrice'] = $ligne['shippingPrice'];
  echo"$ligne[shippingPrice]";

}


?>
