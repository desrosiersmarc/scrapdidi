<tr>
  <td colspan='6'>
  </td>
</tr>

<tr>
  <td colspan='2'>
  </td>
  <td colspan='2' class='td_others basket-td-total'>
      Total produits TTC
  </td>
  <td class='td_others basket-td-total'>
    <?php echo"$prixTotalPanier" ?>€
  </td>
  <td></td>
</tr>
<tr>
  <td colspan='2'>
  </td>
  <td colspan='2' class='td_others basket-td-total'>
    Frais de ports
  </td>
  <td class='td_others basket-td-total'>
    <?php
      if ($_SESSION['shippingSelected']=='')
        {
          $prix_fdp_selected = $prix_fdp_suivi;
          echo"$prix_fdp_selected";
        }
      else
        {
          $price_shipping='prix_fdp_' . $_POST['shippingSelected'];
          $prix_fdp_selected=$_SESSION[$price_shipping];
          echo "$prix_fdp_selected";
        }
    ?>€
  </td>
  <td></td>
</tr>
<tr>
  <td colspan='2'>
  </td>
  <td colspan='2' class='td_others basket-td-total'>
      Total commande
  </td>
  <td class='td_others basket-td-total'>
    <?php
      $sum=sum_of_two_price($prixTotalPanier,$prix_fdp_selected);
      echo"$sum"
    ?>€
  </td>
  <td></td>
</tr>

