<?php

/*
Template Name: Form Layout
*/
 
// Response generation function
$response = "";

// Function to generate response
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
// Response messages
$missing_content = "Molimo popunite cijeli obrazac.";
$email_invalid   = "E-mail je pogrešno unesen.";
$message_unsent  = "Nešto se loše dogodilo. Pokušajte ponovno.";
$message_sent    = "Hvala. Vaš upit je poslan";
 
// User posted variables
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$question = $_POST['question'];

/* Mail content */
 $mail="Naziv poduzeća ili ime korisnika: $name
 				\nTelefon: $phone 
 				\nEmail: $email
 				\nUpit: $question";
 
// php mailer variables
$to = 'gambi@si.t-com.hr';
$subject = "Upit putem web stranice";
$headers = 'Od: '. $email . "\n" . 'Odgovori na: ' . $email . "\n";

// Checking if the form is correct
if(!empty($_POST)) {
    if(empty($name) || empty($phone) || empty($email) || empty($question)){
	  my_contact_form_generate_response("error", $missing_content);
	}
	else {
		// Send mail
		$sent = wp_mail($to, $subject, $mail, $headers);
		if($sent) my_contact_form_generate_response("success", $message_sent); // Message sent!
		else my_contact_form_generate_response("error", $message_unsent); // Message wasn't sent
	}
}

get_header(); ?>

<!-- Page content -->
<div class="container">	
    <article class="form-article">
        <h2>Naslov obrasca</h2>
        <?php echo $response; ?>
        <form class="contact-form" action="<?php the_permalink(); ?>" method="post">
            <input required value="<?php echo isset($_POST['name'])? $_POST['name'] : "" ?>" name="name" type="text" title="Molimo popunite ovo polje" size="37" placeholder="Unesite ime poduzeća ili Vaše ime i prezime">
            <input required value="<?php echo isset($_POST['phone'])? $_POST['phone'] : "" ?>" name="telefon" type="text" title="Molimo popunite ovo polje" size="37" placeholder="Kontakt telefon">
            <input required value="<?php echo isset($_POST['email'])? $_POST['email'] : "" ?>" name="email" type="email" title="Molimo popunite ovo polje" size="37" placeholder="Kontakt email">
            <textarea required value="<?php echo isset($_POST['question'])? $_POST['question'] : "" ?>" name="question" type="text" title="Molimo popunite ovo polje" rows="7" cols="37" wrap="soft" placeholder="Unesite Vaš upit"></textarea>
            
            <input type="hidden" name="submitted" value="1">
            <input type="submit" value="Pošalji upit">
        </form>	
    </article>
</div>


<?php get_footer(); ?>