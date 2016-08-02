<p>Vous souhaitez nous envoyer un message, n'hésitez pas...</p>
<div id="contactUs">
	<form action="produits.php" method="post">
		<div>
			<input name="contacUsPrenom" onblur="hello_word()"  class="input_css" type="text" placeholder="Votre prénom" required="" />
			<input name="contactUsMail" class="input_css" type="email" placeholder="Votre mail" required="">
		</div>
		<div id="contactUsMessageDiv">
			<textarea name="contactUsMessage" type="text area" rows=10 COLS=100 placeholder="Votre message"></textarea>	
		</div>
		<button class="buttonPasserCommande" name="sendContactUs">envoyer... !</button>
	</form>
</div>