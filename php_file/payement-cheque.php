<?php include("payement-steps.inc");?>
<div class="payement-procedure">
  <p>PAIEMENT PAR CHEQUE</p>
  <hr>
  <strong>Vous avez choisi de rélger par chéque. Voici un bref récapitulatif de votre commande</strong>
  <ul>
    <li>Le montant de votre commande s'éléve à <?php echo"$_SESSION[prixTotal]" ?> € TTC</li>
    <li>Nous acceptons la devise suivante pour votre paiement : Euro</li>
    <li>L'ordre et l'adresse du chèque seront affichés sur la page suivante</li>
    <li>Merci de confirmer votre commande en cliquant sur "Je confirme ma commande"</li>
  </ul>
</div>
