<?php session_start();?>
	<!--récupération du code de l'en-tête html-->
	<?php 
		//Intégration des éléments de l'en-tête html
		include ("php_file/01_entete.inc");

		//Intégration des éléments de connexions local ou serveur et de la connexion à la base de données
		include ("php_file/commun.php");
		
		//Intégration des fonctions 
		include ("php_file/fonctions.php");			
		
		//Récupération du nombre de catégorie sur la BDD
		$_SESSION['nbCategorie']=compteLigneTable("categorie");
		//echo "La table catégorie contient $_SESSION[nbCategorie]";
		
		//Initialisation de la variable de session Menu
		if (empty($_SESSION['menu']))
			{
				$_SESSION['menu']='menuFamilles';	//Choix par défaut à l'affichage de la page adminDidi
			}
		
	?>
<body>
		<div id="div_adminContent">
			<div id="div_admin">
				<div id="div_adminMenuContent">
					<div id="div_adminMenu">
						
						<form method='post' action='adminDidi.php'>
							<button type ='button' OnClick='window.location.href=http://www.scrapdidi.fr' class='buttonMenu'>Le Site</button>
							<button name='menu' value='menuCategorie' class='buttonMenu recherche'>Categorie</button>
							<button name='menu' value='menuFamilles' class='buttonMenu'>Familles</button>
							<button name='menu' value='menuSousFamilles' class='buttonMenu'>Sous Familles </button>
							<button name='menu' value='menuArticles' class='buttonMenu'>Articles</button>
							<button name='menu' value='menuFournisseurs' class='buttonMenu'>Fournisseurs</button>
							<button name='menu' value='menuMarques' class='buttonMenu'>Marques</button>
						</form>
						<?php
						//Test un bouton a été cliqué pour récupérer les élémens à afficher
						if (!empty($_POST['menu']))
							{
								$_SESSION['menu']=$_POST['menu'];
							}
						?>
						<br/>	
					</div>
				</div>
				
				
				<div id='adminCategorie'>
				<?php					
					//Include adminCategorie
					include ("php_file/adminCategorie.inc");				
					
					//Affiche les éléments de la catégorie si clique sur catégorie
					if ($_SESSION['menu']=='menuCategorie')
						{	
							afficheCatégorie();
						}
				?>	
				</div>
				
				<div id='adminFamilles'>
					<?php 		
					//Include de la gestion des familles
					include ("php_file/adminFamilles.inc");
					
					//Affiche les éléments de familles si clique sur familles
					if ($_SESSION['menu']=='menuFamilles')
						{	
							afficheFamilles();
						}
						
					?>						
				</div>

				<div id='adminSousFamilles'>
					<?php
						//Include de la gestion des sous familles
						include ("php_file/adminSousFamilles.inc");
						
						//Affiche les éléments de sous familles si clique sur sous familles
						if ($_SESSION['menu']=='menuSousFamilles')
							{	
								afficheSousFamilles();
							}						
					
					?>
					
				</div>
				
				<div id='adminArticles'>
					<?php
						//Include de la gestion des articles
						//Affiche les articles si clique sur articles
						if ($_SESSION['menu']=='menuArticles')
							{	
								echo "<p class='TitreH'> Bientôt la gestion des articles ...;O)</p>";
								echo "<p class='TitreH'>Cliques sur un autre menu...</p>";
							}	
						
					?>
					
				</div>
				
				<div id='adminFournisseurs'>
					<?php
						//Include de la gestion des Fournisseurs
						include ("php_file/adminFournisseurs.inc");
						
						if ($_SESSION['menu']=='menuFournisseurs')
							{	
								afficheFournisseurs();
							}					
					?>
				</div>

				<div id='adminMarques'>
					<?php
						//Include de la gestion des Marques
						include ("php_file/adminMarques.inc");
						
						if ($_SESSION['menu']=='menuMarques')
							{	
								afficheMarques();
							}					
					?>
				</div>
							
			</div>

</body>
</html>
