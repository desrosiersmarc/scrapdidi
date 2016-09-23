<div class="button-steps-content">
  <div class="button-steps-active" id="step1">1.Mon Panier</div>
  <div class="button-steps" id="step2">2.Identification</div>
  <div class="button-steps" id="step3">3.Livraison</div>
  <div class="button-steps" id="step4">4.Paiement</div>
  <div class="button-steps" id="step5">5.Confirmation</div>
</div>

<?php
  if ($_SESSION['step']==1)
    {
      echo"button-steps-active";
    }
  else
    {
      echo"button-steps";
    }
?>
