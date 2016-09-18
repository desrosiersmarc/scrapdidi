<?php session_start();?>
	<!--récupération du code de l'en-tête html-->
	<?php
		//Intégration des fonctions
		include ("php_file/fonctions.php");
		include ("php_file/commun.php");

		//Save user's informations
		include ("php_file/saveUser.inc");

    //Display a div with session informations
    //include ("php_file/display_session.inc");

		//Empty the session's variable of $_SESSION['noSousFamilles'] on a clic to the image home and initialize variables
		if (isset($_POST['home']) || !isset($_SESSION['noSousFamilles']) || !isset($_SESSION['noFamilles']))
			{
				$_SESSION['noSousFamilles']='';
				$_SESSION['noFamilles']='';
				$_SESSION['shippingSelected']='';
				$_SESSION['shippingSelectedText']='';
				$_SESSION['payementChoice']='';
				$_SESSION['payementChoiceText']='';
				$_SESSION['td_class_alert_shipping']='';//?
				$_SESSION['td_class_alert_payement']='';//?
				$_SESSION['valider_commande']='';//?
				$_SESSION['connected']='';//?
			}


		//Add an article to the basket ('panier')
		if (isset($_POST['addBasket']))
			{
				$_SESSION['articleValue']=$_POST['addBasket'];
				include ("php_file/add_basket.php");
			}

		// Update basket informations before to show it
		if (isset($_POST['basketBinButton']))
			{
				$refArticle=$_POST['basketBinButton'];
				$idCommande=$_SESSION['idCommande'];
				deleteArticle($refArticle, $idCommande);
			}

		if (isset($_POST['buttonLess']) or isset($_POST['buttonMore']))
			{
				include ("php_file/add_or_move_article_basket.php");
			}

		if (isset($_POST['sendContactUs']))
			{
				include ("php_file/envoiMailContactUs.php");
			}

		//Intégration des éléments de l'en-tête html
		//Partie devant être affichée dans tous les cas
		include ("php_file/01_entete.inc");
		include ("php_file/02_menu.inc");
		include ("php_file/03_panier.inc");
		include ("php_file/04_menu.inc");
		include ("php_file/04_menuSuite.inc");
		//Fin de la première partie

		//TO acces to the form
		if (isset($_POST['contactUs']))
			{
				include ("php_file/contact_us.inc");
			}

		//
		elseif (isset($_POST['submitAccount']))
			{
				updateClient();
				//$payement_choice=$_SESSION['payementChoice'];
				//include ("php_file/envoiMailOrder.php");
				//procedure_reglement($payement_choice);
				connected_message();
			}
		elseif (isset($_POST['submitAccountKnow']) || isset($_POST['submitAccountUnknow']))
			{
				include ("php_file/account.inc");
			}
		elseif (isset($_POST['myAccount']))
			{
				include ("php_file/my_account.inc");
			}
		elseif (isset($_POST['valider_commande']))
			{
        include ("php_file/shipping.inc");
     //      if(isset($_POST['valider_commande']))
					// 	{
					// 		if ($_SESSION['shippingSelected']=='')
					// 			{
					// 				$_SESSION['td_class_alert_shipping']='td_alert';
					// 				popupMessage('Choisissez un mode de livraison');
					// 				showBasket();

					// 			}
					// 		elseif ($_SESSION['payementChoice']=='')
					// 			{
					// 				$_SESSION['td_class_alert_payement']='td_alert';
					// 				popupMessage('Choisissez un mode de paiement');
					// 				showBasket();
					// 			}
					// 		else
					// 			{
					// 				$_SESSION['td_class_alert_shipping']='';
					// 				$_SESSION['td_class_alert_payement']='';

					// 				if (isset($_SESSION['connected']) and $_SESSION['connected']=='yes')
					// 					{
     //                  updateValidatedBasket();
     //                  updateCommande('etatCommande', 1);

					// 						include ("php_file/envoiMailOrder.php");
					// 						include ("php_file/envoiMailOrderAmandine.php");
					// 					}
					// 				else
					// 					{
					// 						popupMessage("Veuillez vous connecter ou créer un compte pour finaliser votre commande");
					// 						$_SESSION['valider_commande']='yes';
					// 						include ("php_file/my_account.inc");
					// 					}
					// 			}
					// 	}
					// else
					// 	{
					// 		$_SESSION['td_class_alert_shipping']='';
					// 		$_SESSION['td_class_alert_payement']='';
					// 		//include ("php_file/my_account.inc");

					// 		if ($_SESSION['connected']=='yes')
					// 			{
					// 				include ("php_file/envoiMailOrder.php");
					// 				//To send the email to Amandine
					// 				include ("php_file/envoiMailOrderAmandine.php");
					// 			}
					// 		else
					// 			{
					// 				popupMessage("Veuillez vous connecter ou créer un compte pour finaliser votre commande");
					// 			}
					// 	}

			}
		// Update shipping price
		elseif (isset($_POST['shippingHome']) or isset($_POST['shippingSalon']) or isset($_POST['shippingSuivi']) or isset($_POST['shippingColissimo']) or isset($_POST['payementChoice']))
			{
				include ("php_file/shipping.php");
				include ("php_file/payement.php");
				showBasket();
			}

		//When a clic is on a bin image to delete a line in the basket
		elseif (isset($_POST['basketBinButton']) or isset($_POST['buttonLess']) or isset($_POST['buttonMore']))
			{
				showBasket();
			}

		elseif (isset($_POST['basketButton']))
			{
				showBasket();
			}

		//Passage après clic sur un filtre en cours d'écriture - utiliser un nom pour tous les filtres et une variable de session fonction du filtre
		//sélectionné
		elseif (isset($_POST['filters_stock']) or isset($_POST['filters_brand']) or isset($_POST['filters_price']))
			{
				include ("php_file/filtersProducts.inc");
			}

		elseif (isset($_POST['nomMenuFamilles']))
		{
			//Empty the session's variable of 'sous familles' to change page - 20160508
			$_SESSION['noSousFamilles']='';

			$_SESSION['noFamilles']=$_POST['nomMenuFamilles'];
			$_SESSION['nomFamillesNoTable']=nomNoTable($_SESSION['noFamilles'],'familles');

			$_SESSION['etapesArray']=[$_SESSION['nomCategorieNoTable'],$_SESSION['nomFamillesNoTable']];

			//Affichage des menus et sous menus pour arriver à la sélection des articles
			include ("php_file/produitsNavigation.inc");

			afficheSousFamillesMenu();
		}
		elseif (isset($_POST['menuHP']))
			{
				//Empty the session's variable of 'sous familles' to change page - 20160508
				$_SESSION['noSousFamilles']='';

				$_SESSION['noCategorie']=$_POST['menuHP'];
				$_SESSION['nomCategorieNoTable']=nomNoTable($_SESSION['noCategorie'],'categorie');

				$_SESSION['etapesArray']=[$_SESSION['nomCategorieNoTable']];
				//Affichage des menus et sous menus pour arriver à la sélection des articles
				include ("php_file/produitsNavigation.inc");
				afficheFamillesMenu();
			}

		elseif (isset($_POST['nomMenuSousFamilles']) or $_SESSION['noSousFamilles']!='')
		{
			//Premier passage et initialisation des variables de filtre
			if (isset($_POST['nomMenuSousFamilles']))
				{
					$_SESSION['noSousFamilles']=$_POST['nomMenuSousFamilles'];
				}
			$_SESSION['nomSousFamillesNoTable']=nomNoTable($_SESSION['noSousFamilles'],'sousfamilles');

			$_SESSION['etapesArray']=[$_SESSION['nomCategorieNoTable'],$_SESSION['nomFamillesNoTable'], $_SESSION['nomSousFamillesNoTable']];

			//Affichage des menus et sous menus pour arriver à la sélection des articles
			include ("php_file/produitsNavigation.inc");

			//Display filter's menu
			include ("php_file/filtersZone.inc");

			sousFamille_number();
			//put this information in a function to use it in different location

			afficheArticlesMenu();

			echo "
					</div>
				</div>
			";
		}

		else //Add an information to hide this part when we're on article's page
			{
				//Affichage des éléments de la page d'accueil
				include ("php_file/05_banniere.inc");
				include ("php_file/06_nouveautes.inc");
				include ("php_file/07_topVente.inc");
				include ("php_file/08_promotions.inc");
			}



		//Partie du bas de la page à afficher dans tous les cas
		include ("php_file/09_finContent.inc");
		include ("php_file/10_basDePage.inc");
		//Fin de la partie bas de page.


	?>
