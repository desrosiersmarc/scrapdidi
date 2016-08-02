<?php
	if (isset($_POST['shippingHome']))
		{
			$_SESSION['shippingPrice']=$_POST['shippingHome'];
			//Text for the next step. Validation basket
			$_SESSION['shippingSelected']='home';
			$_SESSION['shippingSelectedText']='Récupérer à domicile';
			$_SESSION['td_class_alert_shipping']='';		
		}
	elseif(isset($_POST['shippingSalon']))
		{
			$_SESSION['shippingPrice']=$_POST['shippingSalon'];	
			//Text for the next step. Validation basket
			$_SESSION['shippingSelected']='salon';
			$_SESSION['shippingSelectedText']='Récupérer sur un salon';	
			$_SESSION['td_class_alert_shipping']='';	
		}
	elseif(isset($_POST['shippingSuivi']))
		{
			$_SESSION['shippingPrice']=$_POST['shippingSuivi'];
			//Text for the next step. Validation basket
			$_SESSION['shippingSelected']='suivi';
			$_SESSION['shippingSelectedText']='Courrier Suivi';
			$_SESSION['td_class_alert_shipping']='';			
		}
	elseif(isset($_POST['shippingColissimo']))
		{
			$_SESSION['shippingPrice']=$_POST['shippingColissimo'];	
			//Text for the next step. Validation basket
			$_SESSION['shippingSelected']='colissimo';
			$_SESSION['shippingSelectedText']='Colissimo';
			$_SESSION['td_class_alert_shipping']='';	
		}


?>