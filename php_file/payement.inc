<form action="produits.php" method="POST">
  <div class="payement-content">
    <button class="btn-payement" name="payementChoice" value="virement">
      <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
      <strong>Payer par virement bancaire</strong> (le traitement de la commande sera plus long)
    </button>

    <button class="btn-payement" name="payementChoice" value="cheque">
      <strong>Payer par chèque</strong> (le traitement de la commande sera plus long)
    </button>

    <button class="btn-payement" name="payementChoice" value="paypal">
      <i class="fa fa-cc-paypal" aria-hidden="true"></i>
      <strong>Payez par carte ou par compte Paypal</strong>
    </button>

    <button class="btn-payement" name="payementChoice" value="comptant">
      <i class="fa fa-money" aria-hidden="true"></i>
      <strong>Paiement comptant</strong> au moment du retrait de votre commande à mon domicile ou sur salon
    </button>
  </div>
</form>
