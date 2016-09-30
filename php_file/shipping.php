<?php
  $_SESSION['shippingSelected']=$_POST['shippingSelected'];
  $price_shipping='prix_fdp_' . $_POST['shippingSelected'];
  $price_shipping=$_SESSION[$price_shipping];
  $_SESSION['client-comments']=$_POST['client-comments'];

	if ($_SESSION['shippingSelected']=='home')
		{
			$_SESSION['shippingPrice']=$_SESSION['prix_fdp_home'];
			$_SESSION['shippingSelectedText']='Récupérer à domicile';
		}
	elseif($_SESSION['shippingSelected']=='salon')
		{
			$_SESSION['shippingPrice']=$_SESSION['prix_fdp_salon'];
			$_SESSION['shippingSelectedText']='Récupérer sur un salon';
		}
	elseif($_SESSION['shippingSelected']=='suivi')
		{
			$_SESSION['shippingPrice']=$_SESSION['prix_fdp_suivi'];
			$_SESSION['shippingSelectedText']='Courrier Suivi';
		}
	elseif($_SESSION['shippingSelected']='colissimo')
		{
			$_SESSION['shippingPrice']=$_SESSION['prix_fdp_colissimo'];
			$_SESSION['shippingSelectedText']='Colissimo';
		}
?>
