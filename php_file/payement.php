<?php
	if (isset($_POST['payementChoice']))
		{
			if ($_POST['payementChoice']=='espece')
				{
					$_SESSION['payementChoice']=$_POST['payementChoice'];
					$_SESSION['payementChoiceText']='Espéces';
					$_SESSION['td_class_alert_payement']='';
					//popupMessage('Espèces');
				}
			elseif ($_POST['payementChoice']=='cheque')
				{
					$_SESSION['payementChoice']=$_POST['payementChoice'];
					$_SESSION['payementChoiceText']='Chéque';
					$_SESSION['td_class_alert_payement']='';
					//popupMessage('Chéques');
				}
			elseif ($_POST['payementChoice']=='paypal')
				{
					$_SESSION['payementChoice']=$_POST['payementChoice'];
					$_SESSION['payementChoiceText']='Paypal';
					$_SESSION['td_class_alert_payement']='';
					//popupMessage('Paypal');
				}
		}
?>