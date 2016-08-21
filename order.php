<?php include ("php_file/fonctions.php"); ?>
<?php include ("layouts/orders/top0.php"); ?>
<?php include ("layouts/orders/top1.php"); ?>
  <div class="wrapper-news padder-100 text-center">
    <h2 class="text-center">Commande(s) à traiter  (maxi 5)</h2>
      <div class="container" id="to_treat">
        <table class="table table-condensed">
          <tr>
            <th class="">Date commande</th>
            <th class="">No commande</th>
            <th class="">Nom client</th>
            <th class="">Total</th>
            <th class="">moyen de paiement</th>
            <th class="">mode de livraison</th>
            <th class=""></th>
            <th class=""></th>
            <th class=""></th>
            <th class=""></th>
          </tr>
          <?php display_information_on_order(1); ?>
        </table>
      </div>
  </div>

  <div class="wrapper-card padder-100 text-center">
    <h2>Préparation  (maxi 5)</h2>
    <div class="container" id="in_progress">
        <table class="table table-condensed">
          <tr>
            <th class="">Date commande</th>
            <th class="">No commande</th>
            <th class="">Nom client</th>
            <th class="">Total</th>
            <th class="">moyen de paiement</th>
            <th class="">mode de livraison</th>
            <th class="">date de préparation</th>
            <th class=""></th>
            <th class=""></th>
            <th class=""></th>
          </tr>
          <?php display_information_on_order(2); ?>
        </table>
    </div>
  </div>

  <div class="wrapper-news padder-100 text-center">
    <h2>En attente  (maxi 5)</h2>
      <div class="container" id="waiting">
        <table class="table table-condensed">
          <tr>
            <th class="">Date commande</th>
            <th class="">No commande</th>
            <th class="">Nom client</th>
            <th class="">Total</th>
            <th class="">moyen de paiement</th>
            <th class="">mode de livraison</th>
            <th class="">date de préparation</th>
            <th class="">date de mise en attente</th>
            <th class="">motif</th>
            <th class=""></th>
          </tr>
          <?php display_information_on_order(3); ?>
        </table>
      </div>
  </div>

<?php include ("layouts/orders/bottom.php") ?>
