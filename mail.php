<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    // Entêtes du message
	$headers = ""; // on vide la variable
	$headers = "From: paull.minguet@gmail.com <PaulM>\n";
	$headers = $headers."Content-type: text/html; charset=iso-8859-1\n"; // ajout du type d'encodage du corps
	$headers .= "X-Priority: 1  \n";
	$headers .= "X-MSMail-Priority: High \n";

	$JOUR  = date("d-m-Y");
	$HEURE = date("H:i");
	$nom = htmlentities($_POST["user_name"]);
	$email = htmlentities($_POST["user_mail"]);
	$sujet = htmlentities($_POST["user_sujet"]);
	$msg = nl2br($_POST["user_message"]);

	$message = "message reçu le <b>$JOUR</b> à <b>$HEURE</b>.<br> De <b>$nom</b><br>";
	$message = $message."adresse mail : <b>$email</b><br>";
	$message = $message."sujet : <b>$sujet</b><br>";
	$message = $message."message : <br>$msg<br>";
	 
	// Appel à la fonction mail
	if ( @mail("paull.minguet@gmail.com", "contact", $message, $headers) == TRUE )
	{
        echo "<p>Votre message a bien été envoyé.</p><br><br>";
        echo "Message envoyé le <b>$JOUR</b> à <b>$HEURE</b> par <b>$nom</b><br>";
        echo "Email : <b>$email</b><br>";
        echo "Sujet : <b>$sujet</b><br>";
        echo "Message : $msg";
    }
    ?>
</body>
</html>
