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
