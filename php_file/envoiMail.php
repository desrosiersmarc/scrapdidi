
<?php

//Envoi d'un message à l'attention du propriétaire du site suite à un clic sur Nous Contacter

//Préparation de variable :
	$nomSociete='SCRAPDIDI';			
	$adresseMailSociete=utf8_encode('scrapdidi@gmail.com');
	
	$mailExpediteur=$_POST['contactUsMail'];
	$messageExpediteur=$_POST['contactUsMessage'];
	$prenomExpediteur=$_POST['contacUsPrenom'];
	
//R
	
//Style de la balise <p>
	$styleP="style='font-size: 0.9em;'";
	$stylePetit="style='font-size: 0.7em;'";
	$styleligneHeight="style='ligne-height:30px;'";

$mail="scrapdidi@gmail.com";
//$mail="mdesrosiers.perso@gmail.com" ;
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
"Amandine,"
.$prenomExpediteur." t'a envoyé le message suivant :"
.$messageExpediteur
." "
;


$message_html = 
	"<html>
		<head></head>
		<body>
			<p $styleP>Amandine, </p>
			</br $styleligneHeight>
			<p $styleP><b>$prenomExpediteur</b> t'a envoyé le message suivant :</p><br/>
			<p $styleP><i>$messageExpediteur</i></p><br/>	
		</body>
	</html>";
 
//echo "$message_html";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "[SCRAPDIDI]-Message de ".$mailExpediteur;
//$sujet = $_SESSION['EnseigneTemp'] ." ". $_SESSION['VilleTemp'] ." - Commande n° ". $_SESSION['idCommande'];
//=========
 
//=====Création du header de l'e-mail.
//$header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
$header = "From: $nomSociete <$adresseMailSociete>".$passage_ligne;
//$header.= "Reply-to: $nomSociete <$adresseMailSociete>".$passage_ligne;
$header.= "Reply-to: ".$prenomExpediteur." <".$mailExpediteur.">".$passage_ligne;
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
//echo "$message_html";
//==========

/*
//Solution simple :
$mail="mdesrosiers@orange.fr";
$sujet="Buffalo Grill";
$message="Voilà un mail simple";
mail($mail,$sujet,$message);
 
 */

?>