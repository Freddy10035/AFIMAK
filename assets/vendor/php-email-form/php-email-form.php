<?php
   class PHP_Email_Form {
   
   public $to;
   public $from_name;
   public $from_email;
   public $subject;
   public $message;
   public $smtp = array();
   public $sent = false;
   public $error = false;
   public $error_message = '';
   public $ajax = false;
   
   public function add_message( $message, $label = '', $min_length = 0 ) {
       if( strlen( $message ) < $min_length ) {
       $this->error = true;
       $this->error_message .= "The $label is too short. ";
       }
       $this->message .= "$label: $message\n";
   }
   
   public function send() {
       if( $this->error ) {
       return $this->error_message;
       }
       $headers = "From: $this->from_name <$this->from_email>" . "\r\n" .
       "Reply-To: $this->from_email" . "\r\n" .
       "X-Mailer: PHP/" . phpversion();
       $this->sent = mail( $this->to, $this->subject, $this->message, $headers );
       if( $this->sent ) {
       if( $this->ajax ) {
           return 'OK';
       } else {
           return 'Thank You! I will be in touch';
       }
       } else {
       if( $this->ajax ) {
           return 'Could not send mail! Please check your PHP mail configuration.';
       } else {
           return 'Could not send mail! Please check your PHP mail configuration.';
       }
       }
   }
   
   }

?>