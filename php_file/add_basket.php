<?php
	//This include add article into basket	
	//popupMessage('You re into the basket '.$_SESSION['articleValue']);
	
	updatePanier($_SESSION['articleValue'], $_SESSION['idCommande']);
	
	if (isset($_SESSION['idCommande']))
		{
			countBasket();	
		}
	countBasket()
	
?>