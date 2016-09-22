          <tr class='tr_title'>
            <td colspan='6'>
              <p>Choisissez votre moyen de paiement</p>
            </td>
          </tr>
          <tr>
            <td></td>
            <td class='$td_class_alert_payement'>
          ";
              if ($_SESSION['payementChoice']=='espece')
                {
                  echo"<button class='buttonFraisPortSelected' name='payementChoice' value='espece'>";
                }
              else
                {
                  echo"<button class='buttonFraisPort' name='payementChoice' value='espece'>";
                }
          echo"
                    <img class='imgButtonFraisPort' src='media_site/picto_monnaie.png'>
                    Espéces
                </button>

          ";
              if ($_SESSION['payementChoice']=='cheque')
                {
                  echo"<button class='buttonFraisPortSelected' name='payementChoice' value='cheque'>";
                }
              else
                {
                  echo"<button class='buttonFraisPort' name='payementChoice' value='cheque'>";
                }
          echo"

                <img class='imgButtonFraisPort' src='media_site/picto_cheque.png'>
                Chéque
              </button>
            </td>
            <td></td>
            <td colspan='2'>
            </td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td class='$td_class_alert_payement'>
          ";
              if ($_SESSION['payementChoice']=='paypal')
                {
                  echo"<button class='buttonFraisPortSelected' name='payementChoice' value='paypal'>";
                }
              else
                {
                  echo"<button class='buttonFraisPort' name='payementChoice' value='paypal'>";
                }
          echo"

                <img class='imgButtonFraisPort' src='media_site/picto_paypal.jpg'>
                  Paypal
              </button>

            </td>
            <td></td>
            <td colspan='3'>
              <i>Mode de réglement : $payementChoice</i>
            </td>
          </tr>
