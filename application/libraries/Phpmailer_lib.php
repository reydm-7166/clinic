<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class phpmailer_lib {
    public function __construct(){
        echo ("successfully loaded");
    }
    public function load(){

        require_once APPPATH. 'third_party/PHPMailer/Exception.php';
        require_once APPPATH. 'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH. 'third_party/PHPMailer/SMTP.php';

        $mail = new PHPMailer;
        return $mail;
    }
}