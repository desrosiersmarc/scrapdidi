
                <!-- $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='home')
                  {
                 -->
                  <!-- <button class='buttonFraisPortSelected' name='shippingHome' value='$prix_fdp_home'> -->
<!--                   }
                else
                  { -->
          <!--         <button class='buttonFraisPort' name='shippingHome' value='$prix_fdp_home'>
                <img class='imgButtonFraisPort' src='media_site/home.png'>
                Récupérer à domicile $prix_fdp_home €
              </button> -->

<!--                 $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='salon')
                  { -->
                  <!-- <button class='buttonFraisPortSelected' name='shippingSalon' value='$prix_fdp_salon'> -->
<!--                   }
                else
                  { -->
                  <!-- <button class='buttonFraisPort' name='shippingSalon' value='$prix_fdp_salon'> -->
                  <!-- } -->
           <!--      <img class='imgButtonFraisPort' src='media_site/salon.png'>
                Récupérer sur un salon $prix_fdp_salon €
              </button> -->


<!--                 $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='suivi')
                  { -->
                  <!-- <button class='buttonFraisPortSelected' name='shippingSuivi' value='$prix_fdp_suivi'> -->
<!--                   }
                else
                  { -->
                  <!-- <button class='buttonFraisPort' name='shippingSuivi' value='$prix_fdp_suivi'> -->
                  <!-- } -->

                 <!--  <img class='imgButtonFraisPort' src='media_site/lettre_suivie.jpg'>
                  Courrier suivi $prix_fdp_suivi €
                </button> -->

                <!-- $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='colissimo')
                  { -->
                  <!-- <button class='buttonFraisPortSelected' name='shippingColissimo' value='$prix_fdp_colissimo'> -->
              <!--     }
                else
                  { -->
                  <!-- <button class='buttonFraisPort' name='shippingColissimo' value='$prix_fdp_colissimo'> -->
                  <!-- } -->
<!--             //Put information into a variable
            $shippingChoice=$_SESSION['shippingSelectedText'];
            $payementChoice=$_SESSION['payementChoiceText']; -->
<!--                 <img class='imgButtonFraisPort' src='media_site/colissimo.jpg'>
                Colissimo $prix_fdp_colissimo €
              </button>
              <i>Choix : $shippingChoice</i>

                Total frais de port

              $prixChoisiFraisPort €

              $prixTotalPanierFraisPort € -->

<div class="container-md">
  <h2>
    Choix du mode de livraison
  </h2>
  <form action="produits.php" method="POST">
    <table>
      <tr>
        <td class="shipping-td-total">
          <input type="radio" name="shippingChoice" value="home">
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
          <input type="radio" name="shippingChoice" value="salon">
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
          <input type="radio" name="shippingChoice" value="suivi" selected="selected">
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
          <input type="radio" name="shippingChoice" value="colissimo">
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
    </table>
    <p>
      <strong>
        Laisser un message
      </strong>
    </p>
    <p>Si vous souhaitez nous laisser un message à propos de votre commande ou spécifier le salon pour le retrait de votre commande, merci de bien vouloir utiliser le champs ci-dessous : </p>
    <textarea name="client-comments" id="" cols="60" rows="6"></textarea>
    <p>
      <strong>
        Conditions générales de ventes
      </strong>
    </p>
    <p>
      j'ai lu et j'accepte les conditions générales de vente et j'y adhère sans réserve <a href="">(lire les conditions générales de vente)</a>
    </p>
    <button type='submit' name='shipping_and_payement_step' class="buttonPasserCommande">
      Je valide ma livraison et je passe au paiement
    </button>
  </form>
</div>
