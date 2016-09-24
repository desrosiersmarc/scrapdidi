<?php
  if ($_SESSION['step']==1)
    {
      echo'
        <div class="button-steps-content">
          <div class="button-steps-active" id="step1">1.Mon Panier</div>
          <div class="button-steps" id="step2">2.Identification</div>
          <div class="button-steps" id="step3">3.Livraison</div>
          <div class="button-steps" id="step4">4.Paiement</div>
          <div class="button-steps" id="step5">5.Confirmation</div>
        </div>
      ';
    }
  elseif ($_SESSION['step']==2)
    {
      echo'
        <div class="button-steps-content">
          <div class="button-steps" id="step1">1.Mon Panier</div>
          <div class="button-steps-active" id="step2">2.Identification</div>
          <div class="button-steps" id="step3">3.Livraison</div>
          <div class="button-steps" id="step4">4.Paiement</div>
          <div class="button-steps" id="step5">5.Confirmation</div>
        </div>
      ';
    }
  elseif ($_SESSION['step']==3)
    {
      echo'
        <div class="button-steps-content">
          <div class="button-steps" id="step1">1.Mon Panier</div>
          <div class="button-steps" id="step2">2.Identification</div>
          <div class="button-steps-active" id="step3">3.Livraison</div>
          <div class="button-steps" id="step4">4.Paiement</div>
          <div class="button-steps" id="step5">5.Confirmation</div>
        </div>
      ';
    }
  elseif ($_SESSION['step']==4)
    {
      echo'
        <div class="button-steps-content">
          <div class="button-steps" id="step1">1.Mon Panier</div>
          <div class="button-steps" id="step2">2.Identification</div>
          <div class="button-steps" id="step3">3.Livraison</div>
          <div class="button-steps-active" id="step4">4.Paiement</div>
          <div class="button-steps" id="step5">5.Confirmation</div>
        </div>
      ';
    }
  elseif ($_SESSION['step']==5)
    {
      echo'
        <div class="button-steps-content">
          <div class="button-steps" id="step1">1.Mon Panier</div>
          <div class="button-steps" id="step2">2.Identification</div>
          <div class="button-steps" id="step3">3.Livraison</div>
          <div class="button-steps" id="step4">4.Paiement</div>
          <div class="button-steps-active" id="step5">5.Confirmation</div>
        </div>
      ';
    }
?>
