<?php include("payement-steps.inc");?>

<div class="container-md">
  <h2>
    Choix du mode de livraison
  </h2>
  <form action="produits.php" method="POST">
    <table>
      <tr>
        <td class="shipping-td-total">
          <input type="radio" name="shippingSelected" value="home">
        </td>
        <td class="shipping-td-total">
          <img class='imgButtonFraisPort' src='media_site/home.png'>
        </td>
        <td class="shipping-td-total">
          <p>Retrait à mon domicile sur RDV</p>
          <p>(59200 Tourcoing)</p>
        </td>
        <td class="shipping-td-total">
          <p>Gratuit</p>
        </td>
      </tr>
      <tr>
        <td class="shipping-td-total">
          <input type="radio" name="shippingSelected" value="salon">
        </td>
        <td class="shipping-td-total">
          <img class='imgButtonFraisPort' src='media_site/salon.png'>
        </td>
        <td class="shipping-td-total">
          <p>Retrait sur salon</p>
          <p>Merci de préciser dans le champs ci-dessous le salon pour le retrait de la commande</p>
        </td>
        <td class="shipping-td-total">
          <p>Gratuit</p>
        </td>
      </tr>
      <tr>
        <td class="shipping-td-total">
          <input type="radio" name="shippingSelected" value="suivi" checked="checked">
        </td>
        <td class="shipping-td-total">
          <img class='imgButtonFraisPort' src='media_site/lettre_suivie.jpg'>
        </td>
        <td class="shipping-td-total">
          <p>Lettre suivie</p>
        </td>
        <td class="shipping-td-total">
          <?php
            $prix_fdp_suivi=$_SESSION['prix_fdp_suivi'];
            echo "$prix_fdp_suivi";
          ?>
        </td>
      </tr>
      <tr>
        <td class="shipping-td-total">
          <input type="radio" name="shippingSelected" value="colissimo">
        </td>
        <td class="shipping-td-total">
          <img class='imgButtonFraisPort' src='media_site/colissimo.jpg'>
        </td>
        <td class="shipping-td-total">
          <p>Colissimo</p>
        </td>
        <td class="shipping-td-total">
          <?php
            $prix_fdp_colissimo=$_SESSION['prix_fdp_colissimo'];
            echo "$prix_fdp_colissimo";
          ?>
        </td>
      </tr>
      <tr>
        <td colspan='4'>
          <p class='shipping-title-padding-top'>
            <strong>
              Laisser un message
            </strong>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan='4'>
          <p>
            Si vous souhaitez nous laisser un message à propos de votre commande ou spécifier le salon pour le retrait de votre commande, merci de bien vouloir utiliser le champs ci-dessous :
          </p>
        </td>
      </tr>
      <tr>
        <td colspan='4'>
          <textarea name="client-comments" id="" cols="150" rows="6"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan='4'>
          <p class='shipping-title-padding-top'>
            <strong>
              Conditions générales de ventes
            </strong>
          </p>
        </td>
      </tr>
      <tr>
        <td class="shipping-align-right">
          <input type="checkbox" name="cgv" id="cgv" >
        </td>
        <td colspan='3'>
          <p>
            j'ai lu et j'accepte les conditions générales de vente et j'y adhère sans réserve. Lire les <?php include("php_file/inc_button_cgv.inc") ?>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan='2'>
        </td>
        <td>
          <button type='submit' name='shipping_and_payement_step' class="shipping-button shipping-button-hide" id="shipping-validation">
            Je valide ma livraison et je passe au paiement
          </button>
        </td>
        <td></td>
      </tr>
      <tr>
        <td colspan='4'>
          <p class="shipping-cgv-alert" id="shipping-cgv-alert"> Cochez les cgv pour passer à l'étape suivante</p>
        </td>
      </tr>
    </table>
  </form>
</div>
