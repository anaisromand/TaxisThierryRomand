<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: Taxis Thierry Romand'; 
	$to = 'romand.anais.51@gmail.com'; 
	$subject = $_POST['subject'];
			
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
	if ($_POST['submit']) {
		if($_POST['name'] != '' && $_POST['prenom'] !='' && $_POST['email'] != '' && $_POST['message'] != '') {
			if (mail($to, $subject, $body, $from)) { 
				echo '<p>Votre message a bien été envoyé.</p>';
			} else { 
				echo '<p>Une erreur vient de survenir. Revenez en arrière et réessayez.</p>'; 
			} 
		} else {
			echo '<p>Une erreur vient de survenir. Revenez en arrière et réessayez.</p>'; 
		}				 
	}
?>