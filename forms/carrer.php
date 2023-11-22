<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'rah167725@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->identitynumber = $_POST['identitynumber'];
  $contact->place = $_POST['place'];
  $contact->date = $_POST['date'];
  $contact->gender = $_POST['gender'];
  $contact->address = $_POST['address'];
  $contact->residence = $_POST['residence'];
  $contact->phone = $_POST['phone'];
  $contact->from_email = $_POST['email'];
  $contact->educational = $_POST['educational'];
  $contact->position = $_POST['position'];
  $contact->salary = $_POST['salary'];
  $contact->resume = $_POST['resume'];
  
  

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['identitynumber'], 'identitynumber');
  $contact->add_message( $_POST['place'], 'place');
  $contact->add_message( $_POST['date'], 'date');
  $contact->add_message( $_POST['gender'], 'gender');
  $contact->add_message( $_POST['address'], 'address');
  $contact->add_message( $_POST['residence'], 'residence');
  $contact->add_message( $_POST['phone'], 'phone');
  $contact->add_message( $_POST['email'], 'email');
  $contact->add_message( $_POST['educational'], 'educational');
  $contact->add_message( $_POST['position'], 'position');
  $contact->add_message( $_POST['salary'], 'salary');
  $contact->add_message( $_POST['resume'], 'resume', 10);


  echo $contact->send();
 ?>
