<form method="post" action="produits.php">
	<div class="divBasketContent">
		<div class="divBasketContentUnder">
			<div id="divBasketKnow">
				<p> Déjà un compte ?</p>		
				<input name="mailClient" class="input_css" id="mailClient" type="mail" placeholder="Votre mail">
				<br/>		
				<input name="passwordClient" class="input_css" type="password" placeholder="Votre mot de passe">
				<p>mot de passe oublié ?</p>	
				<button name="submitAccountKnow" class="input_css submitCompte" type="submit">Me connecter</button>
				
			</div>
		</div>
		
		<div class="divBasketContentUnder">
			<div id="divBasketUnknow">
				<p>Créer un compte :</p>		
				<input name="mailClientNew" class="input_css" id="mailClientNew" type="email" placeholder="Votre mail">
				<br/>
				<button name="submitAccountUnknow"class="input_css submitCompte" type="submit">Créer mon compte</button>		
			</div>
		</div>
	</div>
</form>