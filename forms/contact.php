<?php
  // Replace with your real receiving email address
  $receiving_email_address = 'ocampojessekit1@gmail.com';

  // Check if the PHP Email Form library is available
  if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
  } else {
    die('Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  // Set the recipient email address
  $contact->to = $receiving_email_address;
  // Get the sender's name and email from the form fields
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  // Get the email subject from the form field
  $contact->subject = $_POST['subject'];

  // Uncomment the following code if you want to use SMTP to send emails.
  // You need to enter your correct SMTP credentials and specify the host and port of your email service provider.
  
  $contact->smtp = array(
    'host' => 'smtp.elasticemail.com',
    'username' => 'ocampojessekit1@gmail.com',
    'password' => 'FC9B0BDDBE21252CAE268590A52090E8B3AF',
    'port' => '5555'
  );
  
  
  // Add the sender's name, email, and message to the email body
  $contact->add_message($_POST['name'], 'From');
  $contact->add_message($_POST['email'], 'Email');
  $contact->add_message($_POST['message'], 'Message', 10);

  // Send the email and output the result
  echo $contact->send();
?>
