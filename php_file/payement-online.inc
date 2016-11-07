<tr>
  <td colspan='6'>
    <form action="produits.php" method="POST">
      <div class="payement-content">

        <button class="btn-payement" name="payementChoice" value="paypal">
          <img src="css/media_css/picto-paypal.png" alt="" class="picto-payement">
          <strong>Payez par carte ou par compte Paypal</strong>
        </button>

        <button class="btn-payement" name="payementChoice" value="cheque">
          <img src="css/media_css/picto-cheque.png" alt="" class="picto-payement">
          <strong>Payer par chèque</strong> (le traitement de la commande sera plus long)
        </button>

        <button class="btn-payement" name="payementChoice" value="virement">
          <img src="css/media_css/picto-virement.png" alt="" class="picto-payement">
          <strong>Payer par virement bancaire</strong> (le traitement de la commande sera plus long)
        </button>

        <div class="btn-payement-online" name="" value="">
          <img src="css/media_css/picto-espece.png" alt="" class="picto-payement">
          Paiement comptant (non disponible pour la livraison par <?php $message =$_SESSION['shippingSelectedText']; echo"$message";?>)
        </div>
      </div>
    </form>
  </td>
</tr>
