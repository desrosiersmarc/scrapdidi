<?php
switch ($_SESSION['payementChoice'])
  {
    case 'cheque':
      include("php_file/payement-cheque-confirmation.inc");
      break;
    case 'virement':
      include("php_file/payement-virement-confirmation.inc");
      break;
    case 'paypal':
      include("php_file/payement-paypal-confirmation.inc");
      break;
    case 'comptant':
      if ($_SESSION['shippingSelected']=='salon')
        {
          include("php_file/payement-comptant-confirmation-salon.inc");
        }
      elseif ($_SESSION['shippingSelected']=='home')
        {
          include("php_file/payement-comptant-confirmation-domicile.inc");
        }

  }

?>
