<?php
$mail = 'valentin.cadot@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========

// Add email verification
$adresse = htmlspecialchars($_POST['emailInput']);
//=====Définition du sujet.
$sujet = htmlspecialchars($_POST['subjectInput']);
//=========

//=====Déclaration des messages au format texte et au format HTML.
$message_txt = htmlspecialchars($_POST['messageInput']);
//=========

//=====Création du header de l'e-mail.
$header = "From: \"visiteur\"<$adresse>".$passage_ligne;
$header.= "Reply-to: \"valentinCadot\" <valentin.cadot@gmail.com>".$passage_ligne;
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
// //=====Ajout du message au format HTML
// $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
// $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
// $message.= $passage_ligne.$message_html.$passage_ligne;
// //==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
?>
