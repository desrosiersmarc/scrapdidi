<?php include ("php_file/fonctions.php"); ?>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <meta name="author" content="Marc DESROSIERS, Amandine VANNIEUWERBURGH">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/div_md.css">

    <script type="text/javascript" src="js/global.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700|Dancing+Script">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <title>La féérie du scrap</title>
    <link rel="icon" type="image/png" href="media_site/logo-petit.png" />

  </head>

  <body>
  <div class="wrapper-header text-center">
    <div class="">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <i class="fa fa-home" aria-hidden="true"></i>
      <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
      <span class="sr-only">Loading...</span>
      <i class="fa fa-truck fa-flip-horizontal" aria-hidden="true"></i>
      <i class="fa fa-calendar" aria-hidden="true"></i>
      <i class="fa fa-gift" aria-hidden="true"></i>
    </div>
  </div>
  <div class="wrapper-features padder-100 text-center">
   <div class="container">
     <div class="row">
       </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="features-card">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            <h4>
              A traiter
            </h4>
            <p>
              <strong>
                <?php numberOrderByState(1);?>
              </strong>
            </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="features-card">
            <i class="fa fa-paperclip" aria-hidden="true"></i>
            <h4>
              En préparation
            </h4>
            <p>
              <strong>
                <?php numberOrderByState(2);?>
              </strong>
            </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <a href="#waiting">
            <div class="features-card">
              <i class="fa fa-pause" aria-hidden="true"></i>
              <h4>
                En attente
              </h4>
              <p>
                <strong>
                  <?php numberOrderByState(2);?>
                </strong>
              </p>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="features-card">
            <i class="fa fa-truck" aria-hidden="true"></i>
            <h4>
              Expédiées
            </h4>
            <p>
              <strong>
                <?php numberOrderByState(2);?>
              </strong>
            </p>
          </div>
        </div>
     </div>
  </div>
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
          <tr>
            <td class="">15/08/2016</td>
            <td class="">3214</td>
            <td class="">DESROSIERS</td>
            <td class="">12,54€</td>
            <td class="">paypal</td>
            <td class="">colissimo</td>
            <td class="">16/08/2016</td>
            <td class=""></td>
            <td class=""></td>
            <td class="">
              <a href="">
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="">16/08/2016</td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""><i class="fa fa-search-plus" aria-hidden="true"></i></td>
          </tr>
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
          <tr>
            <td class="">15/08/2016</td>
            <td class="">3214</td>
            <td class="">DESROSIERS</td>
            <td class="">12,54€</td>
            <td class="">paypal</td>
            <td class="">Récupérer à domicile</td>
            <td class="">16/08/2016</td>
            <td class="">17/08/2016</td>
            <td class="">En attente réglement</td>
            <td class="">
              <a href="">
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td class="">16/08/2016</td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""></td>
            <td class=""><i class="fa fa-search-plus" aria-hidden="true"></i></td>
          </tr>
        </table>
      </div>
  </div>
  <!-- Your footer code -->
  <div class="wrapper-footer">
    <div class="wrapper-social-link">
      <ul class="list-inline">
        <li>
          <i class="fa fa-youtube"></i>
        </li>
        <li>
          <i class="fa fa-instagram"></i>
        </li>
        <li>
          <i class="fa fa-facebook"></i>
        </li>
        <li>
          <i class="fa fa-twitter"></i>
        </li>
      </ul>
    </div>
    <div class="wrapper-sentence">
      <p>This is an AMMA product</p>
    </div>
  </div>
  <!-- change something to update datetime -->
  <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
