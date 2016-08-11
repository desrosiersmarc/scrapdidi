<?php include ("php_file/fonctions.php"); ?>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <meta name="author" content="Marc DESROSIERS, Amandine VANNIEUWERBURGH">

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
        <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="features-card">
          <i class="fa fa-clipboard" aria-hidden="true"></i>
          <h4>
            Commande(s) à traiter
          </h4>
          <p>
            Tu as <?php numberOrderByState(1);?> commande(s) reçues
          </p>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="features-card">
            <i class="fa fa-paperclip" aria-hidden="true"></i>
            <h4>
              Préparation
            </h4>
            <p>
              Tu as <?php numberOrderByState(2);?> commandes en cours
            </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="features-card">
            <i class="fa fa-truck" aria-hidden="true"></i>
            <h4>
              Expédiées
            </h4>
            <p>
              Liste des commandes expédiées
            </p>
          </div>
        </div>
     </div>
  </div>
  <div class="wrapper-news padder-100">
    <h2 class="text-center">Commande(s) à traiter</h2>
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/188)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/189)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/190)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/191)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Your cards code -->
  <div class="wrapper-card padder-100 text-center">
    <h2>Préparation</h2>
    <div class="container">
      <div class="row">
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/192)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/193)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/194)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="product-card">
              <div class="product-thumb" style="background-image: url(https://unsplash.it/242/195)">
              </div>
              <div class="product-content">
                <div class="product-name">
                  <p>Tampon Clear Lora Bailora - ABC Sketch</p>
                </div>
                <div class="product-informations">
                  <ul class="list-inline">
                    <li>11,95 €</li>
                    <li>Dernière piéce</li>
                    <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
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
  <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
