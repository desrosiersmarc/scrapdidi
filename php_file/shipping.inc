
          <tr class='tr_title'>
            <td colspan='6'>
              <p>Choix du mode de livraison</p>
            </td>
          </tr>
          <tr>
            <td></td>
            <td class=$td_class_alert_shipping>
            ";

                $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='home')
                  {
                  echo"<button class='buttonFraisPortSelected' name='shippingHome' value='$prix_fdp_home'>";
                  }
                else
                  {
                  echo "<button class='buttonFraisPort' name='shippingHome' value='$prix_fdp_home'>";
                  }
            echo"
                <img class='imgButtonFraisPort' src='media_site/home.png'>
                Récupérer à domicile $prix_fdp_home €
              </button>
            ";

                $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='salon')
                  {
                  echo"<button class='buttonFraisPortSelected' name='shippingSalon' value='$prix_fdp_salon'>";
                  }
                else
                  {
                  echo "<button class='buttonFraisPort' name='shippingSalon' value='$prix_fdp_salon'>";
                  }
            echo"
                <img class='imgButtonFraisPort' src='media_site/salon.png'>
                Récupérer sur un salon $prix_fdp_salon €
              </button>
            </td>
            <td></td>
            <td colspan='3'></td>
          </tr>
          <tr>
            <td></td>
            <td class=$td_class_alert_shipping>
            ";

                $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='suivi')
                  {
                  echo"<button class='buttonFraisPortSelected' name='shippingSuivi' value='$prix_fdp_suivi'>";
                  }
                else
                  {
                  echo "<button class='buttonFraisPort' name='shippingSuivi' value='$prix_fdp_suivi'>";
                  }
            echo"
                  <img class='imgButtonFraisPort' src='media_site/lettre_suivie.jpg'>
                  Courrier suivi $prix_fdp_suivi €
                </button>
            ";

                $shippingTest=$_SESSION['shippingSelected'];
                if ($shippingTest=='colissimo')
                  {
                  echo"<button class='buttonFraisPortSelected' name='shippingColissimo' value='$prix_fdp_colissimo'>";
                  }
                else
                  {
                  echo "<button class='buttonFraisPort' name='shippingColissimo' value='$prix_fdp_colissimo'>";
                  }
            //Put information into a variable
            $shippingChoice=$_SESSION['shippingSelectedText'];
            $payementChoice=$_SESSION['payementChoiceText'];
            echo"
                <img class='imgButtonFraisPort' src='media_site/colissimo.jpg'>
                Colissimo $prix_fdp_colissimo €
              </button>
            </td>

            <td colspan='3' class='td_others'>
              <i>Choix : $shippingChoice</i>
            </td>
            <td></td>
          </tr>

          <tr>
            <td colspan='2'>
            </td>
            <td colspan='2'class='td_others'>
                Total frais de port
            </td>
            <td class='td_others'>
              $prixChoisiFraisPort €
            </td>
            <td></td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td colspan='2'>
            </td>
            <td colspan='2'class='td_total'>
                Total commande
            </td>
            <td class='td_total'>
              $prixTotalPanierFraisPort €
            </td>
            <td></td>
          </tr>
          ////
