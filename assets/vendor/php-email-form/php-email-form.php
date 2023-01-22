<?php
class PHP_Email_Form {

    public $ajax;
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $messages = array();
    public $smtp = array();
    
    public function __construct() {
    }
    
    public function add_message($message, $label, $nl2br = true) {
        $this->messages[] = array('message' => $message, 'label' => $label, 'nl2br' => $nl2br);
    }
    
    public function send() {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: '. $this->from_name .' <'. $this->from_email .'>' . "\r\n";

        $message = '<html><body>';
        foreach ($this->messages as $msg) {
            $message .= '<p><strong>' . $msg['label'] . ':</strong> ';
            if ($msg['nl2br']) {
                $message .= nl2br($msg['message']);
            } else {
                $message .= $msg['message'];
            }
            $message .= '</p>';
        }
        $message .= '</body></html>';

        mail($this->to, $this->subject, $message, $headers);
    }
}
?>
