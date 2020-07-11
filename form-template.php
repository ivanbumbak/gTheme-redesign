<?php

/*
Template Name: Form Layout
*/

/* 
Generiramo odgovor na submit
*/
 
//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

  global $response;

  if($type == "success") {
  	$response = "<div class='success'>{$message}</div>";
  }

  else {
  	$response = "<div class='error'>{$message}</div>";
  }

}


/* Form variables */

//response messages
$missing_content = "Molimo popunite cijeli obrazac.";
$email_invalid   = "E-mail je pogrešno unesen.";
$message_unsent  = "Nešto se loše dogodilo. Pokušajte ponovno.";
$message_sent    = "Hvala. Vaš upit je poslan";
 
//user posted variables
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$question = $_POST['question'];

/* Sadržaj mail-a */
 $mail="Naziv poduzeća ili ime korisnika: $name
 				\nTelefon: $phone 
 				\nEmail: $email
 				\nUpit: $question";
 
//php mailer variables
$to = 'gambi@si.t-com.hr';
$subject = "Upit";
$headers = 'Od: '. $email . "\n" . 'Odgovori na: ' . $email . "\n";

// Checking if the form is correct
if(!empty($_POST)) {
    if(empty($name) || empty($phone) || empty($email) || empty($question)){
	  my_contact_form_generate_response("Greška", $missing_content);
	}
	else {
		// Pošalji mail
		$sent = wp_mail($to, $subject, $mail, $headers);
		if($sent) my_contact_form_generate_response("Uspješno", $message_sent); //message sent!
		else my_contact_form_generate_response("Greška", $message_unsent); //message wasn't sent
	}
}

get_header(); ?>

<!-- Page content -->
<div class="container">	
    <article class="form-article">
        <?php echo $response; ?>
        <form class="contact-form" action="<?php the_permalink(); ?>" method="post">
            <input required value="<?php echo isset($_POST['name'])? $_POST['name'] : "" ?>" name="name" type="text" title="Molimo popunite ovo polje" placeholder="Unesite ime poduzeća ili Vaše ime i prezime">
            <input required value="<?php echo isset($_POST['telefon'])? $_POST['telefon'] : "" ?>" name="telefon" type="text" placeholder="Kontakt telefon">
            <input required value="<?php echo isset($_POST['email'])? $_POST['email'] : "" ?>" name="email" type="email" placeholder="Kontakt email">
            <input required value="<?php echo isset($_POST['question'])? $_POST['question'] : "" ?>" name="question" type="text" placeholder="Unesite Vaš upit">

            <input type="hidden" name="submitted" value="1">
            <input type="submit" value="Potvrdi">
        </form>		
    </article>
</div>


<?php get_footer(); ?>