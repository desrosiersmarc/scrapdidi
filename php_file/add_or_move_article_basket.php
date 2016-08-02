<?php
	if (isset($_POST['buttonLess']))
		{
			$idCommande=$_SESSION['idCommande'];
			$refArticle=$_POST['buttonLess'];
			$nbOfArticle=countBasketArticle($idCommande, $refArticle);
			
				if ($nbOfArticle>1)
					{
						//popupMessage($nbOfArticle);
						deleteOneArticle($idCommande, $refArticle);
					}
				elseif ($nbOfArticle=1)
					{
						DeleteArticle($refArticle, $idCommande);
						//popupMessage("Are you sure ?");
					}
		}
	elseif (isset($_POST['buttonMore']))
		{
			$idCommande=$_SESSION['idCommande'];
			$refArticle=$_POST['buttonMore'];
			
			updatePanier($refArticle, $idCommande);			
		}
	
	
	//or isset($_POST['buttonMore'])
?>