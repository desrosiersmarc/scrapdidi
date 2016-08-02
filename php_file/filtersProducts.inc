	<?php
	
		//collect value of the button
		if (isset($_POST['filters_stock']))
			{
				$table="filters_stock";
				$value=$_POST['filters_stock'];
				$id="idFiltersStock";
				
				update_filters_table($table, $value, $id);
			}
		elseif (isset($_POST['filters_price'])) 
			{
				$table="filters_price";
				$value=$_POST['filters_price'];
				$id="idPriceFilters";
				
				update_filters_table($table, $value, $id);				
			}
		else 
			{
				$table="filters_brand";
				$value=$_POST['filters_brand'];
				$id="idFilters";
				
				update_filters_table($table, $value, $id);			
			}
				//Affichage des menus et sous menus pour arriver à la sélection des articles
				include ("php_file/produitsNavigation.inc");
				
				//Display filter's menu
				include ("php_file/filtersZone.inc");
				
				//Display Categorie and number of 'articles'
				sousFamille_number();
				
				//Display products
				afficheArticlesMenu();
	?>