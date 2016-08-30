<div class='account'>
  <h4>Identifiez-vous</h4>
  <form method="post" action="produits.php">
  	<div class="divBasketContent">
  		<div class="divBasketContentUnder">
  			<div id="divBasketUnknow">
  				<p>
            CREEZ VOTRE COMPTE
          </p>
          <hr>
          <p>
            Saisissez votre adresse mail pour créer votre compte
          </p>
          <br>
          <label for="mailClientNew">Adresse mail</label>
  				<input name="mailClientNew" class="input_css" id="mailClientNew" type="email" placeholder="Votre mail">
  				<br/>
  				<button name="submitAccountUnknow"class="input_css submitCompte" type="submit">
            Créer mon compte
          </button>
  			</div>
  		</div>
      <div class="divBasketContentUnder">
        <div id="divBasketKnow">
          <p>
            DEJA INSCRIT ?
          </p>
          <hr>
          <label for="mailClient">Adresse mail</label>
          <input name="mailClient" class="input_css" id="mailClient" type="mail" placeholder="Votre mail">
          <br/>
          <label for="passwordClient">Mot de passe</label>
          <input name="passwordClient" class="input_css" type="password" placeholder="Votre mot de passe">
          <p>
            mot de passe oublié ?
          </p>
          <button name="submitAccountKnow" class="input_css submitCompte" type="submit">  Me connecter
          </button>
        </div>
      </div>
  	</div>
  </form>
</div>
