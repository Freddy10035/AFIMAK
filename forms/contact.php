<?php

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

//....Replace contact@example.com with your real receiving email address


$receiving_email_address = 'fredrick_ochieng@outlook.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];



//...Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'flaughters@gmail.com',
    'password' => 'mmmmmxxxxrrrr',
    'port' => '587'
  );
  */

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

echo $contact->send();



  // require '../assets/vendor/autoload.php';

  // $receiving_email_address = 'fredrick_ochieng@outlook.com';
  
  // $mail = new PHPMailer;
  
  // //SMTP settings
  // $mail->isSMTP();
  // $mail->Host = 'smtp.gmail.com';
  // $mail->SMTPAuth = true;
  // $mail->Username = 'flaughters@gmail.com';
  // $mail->Password = 'MasterDroyd10035';
  // $mail->SMTPSecure = 'tls';
  // $mail->Port = 587;
  
  // $mail->setFrom($_POST['email'], $_POST['name']);
  // $mail->addAddress($receiving_email_address, 'Recipient Name');
  
  // $mail->isHTML(true);
  
  // $mail->Subject = $_POST['subject'];
  // $mail->Body = $_POST['message'];
  
  // if(!$mail->send()) {
  //     echo 'Message could not be sent.';
  //     echo 'Mailer Error: ' . $mail->ErrorInfo;
  // } else {
  //     echo 'Message has been sent';
  // }
?>