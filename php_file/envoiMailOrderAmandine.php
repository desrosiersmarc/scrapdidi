
<?php

//Préparation de variable :
	$nomSociete='SCRAPDIDI';			
	$adresseMailSociete=utf8_encode('scrapdidi@gmail.com');
	
	$no_order=$_SESSION['idCommande'];
	$nom_client=$_SESSION['nom'];
	$prenom_client=$_SESSION['prenom'];

	$total_commande=$_SESSION['prixTotal'];
	$mode_livraison=$_SESSION['shippingSelectedText'];;
	$payement_choice=$_SESSION['payementChoiceText'];
	
//Delete the value of $_SESSION['valider_commande']
	$_SESSION['valider_commande']='';
	
//Style de la balise <p>
	$styleP="style='font-size: 1.1em;'";
	$stylePetit="style='font-size: 0.7em;'";
	$styleligneHeight="style='ligne-height:30px;'";


//$mail = "$_SESSION[mailClient]";
$mail="mdesrosiers.perso@gmail.com" ;
$mail="scrapdidi@gmail.com" ;
//echo "$mail";
// Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = 
"Bonjour ".$prenom_client.","
."Votre Commande n°".$no_order
." a bien été envoyée."
."Vous receverez un email de confirmation dés validation du paiement ."
.""
;


$message_html = 
	"<html>
		<head></head>
		<body>
			<p $styleP>Amandine, </p>
			</br $styleligneHeight>
			<p $styleP>$prenom_client vient de passer la commande n°<i>(n° $no_order)</i> pour un montant de $total_commande €.</p>
			<p $styleP>Le moyen de réglement retenu est par $payement_choice</p>
			<p $styleP>Le mode de livraison sera : $mode_livraison</p>
			<p $styleP>Bonne préparation...;o)</p>
		</body>
	</html>";
 
//echo "$message_html";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Une nouvelle commande sur scrapdidi.fr (n°$no_order)";
//$sujet = $_SESSION['EnseigneTemp'] ." ". $_SESSION['VilleTemp'] ." - Commande n° ". $_SESSION['idCommande'];
//=========
 
//=====Création du header de l'e-mail.
//$header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
$header = "From: $nomSociete <$adresseMailSociete>".$passage_ligne;
$header.= "Reply-to: $nomSociete <$adresseMailSociete>".$passage_ligne;
//$header.= "Reply-to: 'Client' <mdesrosiers@orange.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);


?>