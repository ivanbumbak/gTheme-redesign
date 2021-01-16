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
$user_name = $_POST['user_name'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];
$user_message = $_POST['user_message'];

/* Mail content */
$mail="Naziv poduzeća ili ime korisnika: $user_name
 				\nTelefon: $user_phone 
 				\nEmail: $user_email
 				\nUpit: $user_message";
 
// php mailer variables
$to = 'gambi@si.t-com.hr';
$subject = "Upit putem web stranice";
$headers = 'Od: '. $user_name . "\n" . 'Odgovori na: ' . $email . "\n";

// Checking if the form is correct
if(!empty($_POST)) {
    if(empty($user_name) || empty($user_phone) || empty($user_email) || empty($user_message)){
	  my_contact_form_generate_response("error", $missing_content);
	}
	else {
		// Send mail
        $sent = wp_mail($to, $subject, $mail, $headers);
        if($sent) my_contact_form_generate_response("success", $message_sent); // Message sent!
        else my_contact_form_generate_response("error", $message_unsent); // Message wasn't sent!
    }
}

get_header(); ?>

<!-- Page content -->
<div class="contact">
    <div class="container">
        <div class="wrapper-form">
            <div class="section-half-contact">
                <article class="form-article">
                    <form class="contact-form" action="<?php the_permalink(30); ?>" method="post">
                        <input required value="<?php echo isset($_POST['user_name'])? $_POST['user_name'] : "" ?>" name="user_name" type="text" title="Molimo popunite ovo polje" size="37" placeholder="Unesite ime poduzeća ili Vaše ime i prezime">
                        <input required value="<?php echo isset($_POST['user_phone'])? $_POST['user_phone'] : "" ?>" name="user_phone" type="text" title="Molimo popunite ovo polje" size="37" placeholder="Kontakt telefon">
                        <input required value="<?php echo isset($_POST['user_email'])? $_POST['user_email'] : "" ?>" name="user_email" type="email" title="Molimo popunite ovo polje" size="37" placeholder="Kontakt email">
                        <textarea required value="<?php echo isset($_POST['user_message'])? $_POST['user_message'] : "" ?>" name="user_message" type="text" title="Molimo popunite ovo polje" rows="7" cols="37" wrap="soft" placeholder="Unesite Vaš upit"></textarea>
                        
                        <input type="hidden" name="submitted" value="1">
                        <input type="submit" value="Pošalji upit">
                    </form>	

                    <?php echo $response; ?>
                </article>
            </div>
            <div class="section-half-contact">
                <h2>Imate upit? <br> <br> Ispunite obrazac ili nam se javite putem društvenih mreža</h2>
                <a href="https://www.facebook.com/gambidoo" title="Facebook page" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" title="Instagram page" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>