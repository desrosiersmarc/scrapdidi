<?php  session_start() ?>
<?php include ("php_file/fonctions.php"); ?>
<?php include ("layouts/orders/top0.php"); ?>


<?php if (isset($_POST['idCommande'])) {$_SESSION['idCommande']=$_POST['idCommande'];}?>
<?php $idCommande = $_SESSION['idCommande']; ?>
<?php if (isset($_POST['idClient'])){$_SESSION['idClient']=$_POST['idClient'];} ?>
<?php if (isset($_POST['shippingMode'])){$_SESSION['shippingMode'] = $_POST['shippingMode'];} ?>
<?php if (isset($_POST['waiting_pattern'])){$_SESSION['waiting_pattern'] = $_POST['waiting_pattern'];} ?>

<?php load_information_customer($idCommande); ?>

<?php
  if (isset($_POST['comments']))
  {
    update_comments($_SESSION['idCommande'], $_POST['comments']);
  }
?>

<?php $comments = trim(read_comments($idCommande)); ?>
<!-- <?php print_r($_SESSION); ?> -->

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
        <form action="order_detail.php" method="post">
          <div class="container">
            <div class="row">
              <div class="comment-button">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="commentsOrder">Commentaires</label>
                    <textarea class="form-control" name="comments" id="commentsOrder">
                    <?php echo"$comments" ?>
                    </textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-info btn-block btn-lg">
                    Mettre à jour
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include ("layouts/orders/bottom.php") ?>
