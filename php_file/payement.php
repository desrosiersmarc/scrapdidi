<?php
	if (isset($_POST['payementChoice']))
		{
			if ($_POST['payementChoice']=='virement')
				{
					$_SESSION['payementChoice']=$_POST['payementChoice'];
					$_SESSION['payementChoiceText']='Virement';
          include("php_file/payement-virement.php");
					//popupMessage('Espèces');
				}
			elseif ($_POST['payementChoice']=='cheque')
				{
					$_SESSION['payementChoice']=$_POST['payementChoice'];
					$_SESSION['payementChoiceText']='Chéque';
          include("php_file/payement-cheque.php");
					//popupMessage('Chéques');
				}
			elseif ($_POST['payementChoice']=='paypal')
				{
					$_SESSION['payementChoice']=$_POST['payementChoice'];
					$_SESSION['payementChoiceText']='Paypal';
          include("php_file/payement-paypal.php");
					//popupMessage('Paypal');
				}
      elseif ($_POST['payementChoice']=='comptant')
      {
          $_SESSION['payementChoice']=$_POST['payementChoice'];
          $_SESSION['payementChoiceText']='Comptant';
          include("php_file/payement-comptant.php");
      }
		}
?>

