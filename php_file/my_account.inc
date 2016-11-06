<div class='account'>
  <h4>
    IDENTIFIEZ-VOUS
  </h4>
  <hr>
  <div class="divBasketContent">
    <form method="post" action="produits.php">
      <div class="divBasketContentUnder">
  		  <div id="divBasketUnknow">
  				<h4>
            CREEZ VOTRE COMPTE
          </h4>
          <hr>
          <p>
            Saisissez votre adresse mail pour créer votre compte
          </p>
          <br>
          <label for="mailClientNew">Adresse mail</label>
  				<input name="mailClientNew" class="input_css" id="mailClientNew" type="email" placeholder="Votre mail">
  				<br/>
  				<button name="submitAccountUnknow" class="button-submit" type="submit">
            Créer mon compte
          </button>
  		  </div>
      </div>
      <div class="divBasketContentUnder">
        <div id="divBasketKnow">
          <h4>
            DEJA INSCRIT ?
          </h4>
          <hr>
          <label for="mailClient">Adresse mail</label>
          <input name="mailClient" class="input_css" id="mailClient" type="mail" placeholder="Votre mail">
          <br/>
          <label for="passwordClient">Mot de passe</label>
          <input name="passwordClient" class="input_css" type="password" placeholder="Votre mot de passe">
          <p>
            mot de passe oublié ?
          </p>
          <button name="submitAccountKnow" class="button-submit" type="submit">  Me connecter
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
