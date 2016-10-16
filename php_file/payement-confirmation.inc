<?php
switch ($_SESSION['payementChoice'])
  {
    case 'cheque':
      include("php_file/payement-cheque-confirmation.inc");
      $_SESSION['textExpedition']='
        <p $styleP>
          Et les informations pour l’envoi du chèque:
        </p>
        <ul>
          <li $styleP>Ordre : La boutique de Didi
          </li>
          <li $styleP>
            Adresse postale : 40, rue des Coulons, 59200, Tourcoing.
          </li>
        </ul>
        <p $styleP>
          Nous informerons de l’expédition de votre commande dès réception et encaissement du chèque.
        </p>';
      break;
    case 'virement':
      include("php_file/payement-virement-confirmation.inc");
      $_SESSION['textExpedition']='
        <p $styleP>
          Et les informations pour effectuer le virement bancaire :
        </p>
        <ul>
          <li $styleP>
            IBAN : FR00 | 1234 | 5678 | 1011 | 1213 | 1415
          </li>
        </ul>
        <p $styleP>
          Nous informerons de l’expédition de votre commande dès réception du paiement.
        </p>';
      break;
    case 'paypal':
      include("php_file/payement-paypal-confirmation.inc");
      break;
    case 'comptant':
      if ($_SESSION['shippingSelected']=='salon')
        {
          include("php_file/payement-comptant-confirmation-salon.inc");
          $_SESSION['textExpedition']='
          <p $styleP>
            Au plaisir de se retrouver sur un salon.
          </p>';
        }
      elseif ($_SESSION['shippingSelected']=='home')
        {
          include("php_file/payement-comptant-confirmation-domicile.inc");
          $_SESSION['textExpedition']='
          <p $styleP>
            Au plaisir de se retrouver à mon domicile.
          </p>';
        }

  }

?>
