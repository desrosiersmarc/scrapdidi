<div id="basPageContent">
 <div class="social-media-content">
    <div id="reseauxSociauxContent">
      <div id="reseauxSociaux">
        <p class="couleurpTitre">Nous suivre sur les réseaux sociaux</p>
      </div>
      <a href="https://www.facebook.com/lescrap.dedidi" target="_blank"><img src="media_site/facebook.png" class="img_reseau"></a>
      <a href="https://fr.pinterest.com/dedidi/" target="_blank"><img src="media_site/instagram.png" class="img_reseau"></a>
    </div>
    <div id="newsLetterContent">
      <div id="newsLetter">
        <p id="newsletter_p" class="couleurpTitre">S'inscrire à la newsletter</p>
        <input class="blocRecherche" placeholder="adresse mail...">
        <div id="ok" class="loupe">
          <p>ok</p>
        </div>
      </div>
    </div>
    <div id="traitBasPageHContent">
      <div id="traitBasPageH">
      </div>
    </div>
      <div id="blocsContent">
        <div id="informations" class="blocsBasPage">
          <p class="couleurpTitre">Informations</p>
          <ul class="tailleTexteInformations couleurpTitre" >
            <form action="produits.php" method="POST">
              <li>
                <button class="cgv-button" name="mentions_legales" type="submit">
                  <u>Mentions légales</u>
                </button>
              </li>
              <li>
                <?php include("php_file/inc_button_cgv.inc") ?>
              </li>
            </form>
            <li><p class="tailleTexteInformations"><a href="http://ec.europa.eu/consumers/odr"  target="_blank">En cas de litiges</a></p></li>
          </ul>
        </div>
        <div class="traitBasPageV">
        </div>
        <div id="cgr" class="blocsBasPage">
          <p class="couleurpTitre">Paiements acceptés</p>
          <img src="media_site/paiement.jpg" class="img_paiement">
        </div>
        <div class="traitBasPageV">
        </div>
        <div id="conditionsLivraison" class="blocsBasPage">
          <p class="couleurpTitre">Tarifs livraisons</p>
          <img src="media_site/livraison.jpg" class="img_paiement">
        </div>
      </div>
  </div>
</div>
<div id="logoBasContent">
	<img src="media_site/banniere_bas.png" id="logoBas">
</div>
</div>


			</div>
		</div>
    <script
      src="https://code.jquery.com/jquery-3.1.0.js"
      integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="
      crossorigin="anonymous">
    </script>
   <script type="text/javascript" src="js/global.js"></script>
</body>
</html>
