<?php include ("php_file/fonctions.php"); ?>
<?php include ("layouts/orders/top0.php"); ?>

<?php $_SESSION['idCommande']=$_POST['idCommande']?>
<?php  $idCommande = $_SESSION['idCommande']?>
<?php $_SESSION['idClient']=$_POST['idClient']?>
<?php $_SESSION['shippingMode'] = $_POST['shippingMode'] ?>
<?php $_SESSION['waiting_pattern'] = $_POST['waiting_pattern'] ?>

<!-- <?php popupmessage($shippingMode)?> -->

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div class="information-div">
        <?php details_customer($_SESSION['idClient']); ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="information-div">
        <p>
          <strong>N° de commande : <?php echo"$_SESSION[idCommande]" ?></strong>
        </p>
        <p>
          Choix du mode de livraison :
          <?php echo"$_SESSION[shippingMode]" ?>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="waiting-comment">
        <?php waiting_pattern_sentence($_SESSION['waiting_pattern']); ?>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-condensed">
        <tr>
          <th>Photo</th>
          <th>Référence</th>
          <th>Libellé</th>
          <th>Prix unitaire</th>
          <th>Qté</th>
          <th>Prix total</th>
          <th>Qté disponible</th>
          <th>Check</th>
        </tr>
        <?php list_article_commande($_SESSION['idCommande']) ?>
      </table>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <div class="buttons-div">

        <form action="order.php" method="post">
          <input type="hidden"  name="statement" value="2"/>
          <input type="hidden"  name="idCommande" value= <?php echo"$idCommande" ?>>
          <input type="submit" class="btn btn-primary" value="Préparation en cours"/>
        </form>
        <form action="order.php" method="post">
          <input type="hidden"  name="statement" value="3"/>
          <input type="hidden"  name="idCommande" value= <?php echo"$idCommande" ?>>
          <input type="submit" class="btn btn-warning" value="Mise en attente"/>
        </form>
        <form action="order.php" method="post">
          <input type="hidden"  name="statement" value="4"/>
          <input type="hidden"  name="idCommande" value= <?php echo"$idCommande" ?>>
          <input type="submit" class="btn btn-success" value="Expédiée"/>
        </form>
        <form action="order.php" method="post">
          <input type="hidden"  name="statement" value="5"/>
          <input type="hidden"  name="idCommande" value= <?php echo"$idCommande" ?>>
          <input type="submit" class="btn btn-danger" value="Annuler"/>
        </form>


      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <table class="table table-condensed">
        <tr>
          <th>Produit</th>
          <th>Prix</th>
        </tr>
        <tr>
          <td>Livraison</td>
          <td><?php shipping_price ($_SESSION['idCommande']) ?> €</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>
            <?php
            $total = $_SESSION['shippingPrice'] + total_basket($_SESSION['idCommande']);
            echo"$total";
            ?>
            €
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="comment-div">
        <form action="">
          <div class="form-group">
            <label for="commentsOrder">Commentaires</label>
            <textarea class="form-control" rows="3" id="commentsOrder">
            </textarea>

          <button type="submit" value="2" name="statement" class="btn btn-info">
            Mettre à jour
          </button>

            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include ("layouts/orders/bottom.php") ?>
