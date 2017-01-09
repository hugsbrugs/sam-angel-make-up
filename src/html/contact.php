<?php

/**
 * https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form
 * https://bootstrapbay.com/blog/working-bootstrap-contact-form/
 */
$errEmail = '';
$errMessage = '';
$errHuman = '';
$result = '';

if (isset($_POST["submit"]))
{
	// $name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$human = intval($_POST['human']);
	$from = 'Sam Angel Make Up : Formulaire de Contact'; 
	// $to = 'hugo.maugey@gmail.com';
	$to = 'sam.angel.make.up@gmail.com';
	$subject = 'Message from Sam Angel Make Up';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	// Check if name has been entered
	// if (!$_POST['name']) {
	// 	$errName = 'Please enter your name';
	// }
	
	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = '<div class="alert alert-danger">Veuillez entrer une adresse email valide</div>';
	}
	
	//Check if message has been entered
	if (!$_POST['message'])
	{
		$errMessage = '<div class="alert alert-danger">Veuillez entrer un message</div>';
	}
	//Check if simple anti-bot test is correct
	if ($human !== 10)
	{
		$errHuman = '<div class="alert alert-danger">Le code de vérification est incorrect</div>';
	}

	// If there are no errors, send the email
	if (!$errEmail && !$errMessage && !$errHuman)
	{
		if (mail ($to, $subject, $body, $from))
		{
			$result = '<div class="alert alert-success">Merci pour votre demande ! Je reviens vers vous au plus vite.</div>';
			// reset form
			$email = '';
			$message = '';
			$human = '';
		}
		else
		{
			$result='<div class="alert alert-danger">Désolé mais une erreur est survenue lors de l\'envoi du message. Veuillez réessayer ultérieurement.</div>';
		}
	}
}
else
{
	$email = '';
	$message = '';
}

?>

<!-- Contact Section -->
<section id="mail" class="container content-section">
    
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2 class="text-center">Formulaire de contact</h2>
            <form name="contact" role="form" method="post">
	            
	            <label for="email">Votre email</label>
	            <input type="email" name="email" id="email" class="form-control margin-bottom-sm" placeholder="nom@email.com" value="<?= htmlspecialchars($email); ?>" required>
	            <?= $errEmail ?>

	            <label for="message">Votre message</label>
	            <textarea name="message" class="form-control margin-bottom-sm" placeholder="Merci d'indiquer votre nom, les prestations qui vous intéressent ainsi que vos coordonnées. Merci. A bientôt. Samantha" rows=10 required><?= htmlspecialchars($message);?></textarea>
	            <?= $errMessage ?>

				<label for="human">Quention anti-spam : 7 + 3 = ?</label>
				<input type="text" class="form-control" id="human" name="human" placeholder="Votre réponse" required>
				<?= $errHuman ?>

	            <button id="submit" name="submit" type="submit" class="btn btn-success form-control margin-top-sm">Envoyer</button>

	        </form>
        </div>
        
        <div class="col-lg-8 col-lg-offset-2 margin-top-lg">
			<?= $result ?>	
		</div>

    </div>
</section>