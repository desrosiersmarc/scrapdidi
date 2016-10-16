<?php
	if (isset($_SESSION['prenom']) && $_SESSION['prenom']!="")
		{
			$prenomClient="Mon Compte : " . $_SESSION['prenom'];
      $prenomClientSeul=$_SESSION['prenom'];
		}
	else
		{
			$prenomClient="Mon Compte";
		}

?>

<body>
		<div id="zone_md">
			<div id="zone_mdcontenu">
				<div id="titreContent">
					<div id="titre">
						<form action="produits.php" method="post">
							<div id="titreContact" class="couleurpTitre">
								<button class='buttonMenuTop' name='contactUs' type='submit'>Nous contacter </button>
							</div>
							<div id="titreCompte" class="couleurpTitre">
								<button class='buttonMenuTop' name='myAccount' type='submit'>
                  <?php
                    echo"$prenomClient ";
                  ?>
                </button >
                <?php
                if (isset($_SESSION['prenom']) && $_SESSION['prenom']!="")
                  {
                    echo"
                      <button name='disconnect' class='disconnect' id='disconnect'>
                        X
                      </button>
                    ";
                  }
                ?>
							</div>
						</form>
					</div>

				</div>

				<div id="zoneHorsTitreContent">
					<div id="recherchePanier">
						<div id="logoTitreContent" class="titreEtRecherche">
							<!--basculer le height dans le CSS-->
							<a href="produits.php"><img src="media_site/logo_titre.png" height="90 px"></a>
						</div>

						<div id="rechercheContent" class="titreEtRecherche ">
							<div id="recherche">
							</div>
						</div>

						<div id="panierContent" >
							<div id="panier">
								<FORM method='post' action='produits.php'>
									<button id="basketButtonCSS" name="basketButton">
										<img src="media_site/panier.png" class="panierLogo">
											<div class='rondArticle'>
												<?php
													//Solution to show the number of articles in the basket into a circle pink
													countBasket();
													$toShow = $_SESSION['count_basket'];
													echo "<p>$toShow</p>";
												?>

											</div>
									</button>
								</form>
							</div>

							<div id="infoPanier">
								<div id="articlesPanier" >

