<?php

class Mails extends CI_controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('PHPMailer_lib');
    }

    public function good(){
        $data = $this->input->post();
        if($data['submit'] == 'Approved'){
            //SMTP Settings
            $mail = $this->phpmailer_lib->load();
            $mail->Clearaddresses();
            $mail->ClearAttachments();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "wfnotification22@gmail.com";
            $mail->Password = '06150318@#$wellness';
            $mail->Port = 465; //587
            $mail->SMTPSecure = "ssl"; //tls
            
            $mail->isHTML(true);
            $mail->setFrom('wfnotification22@gmail.com');
            $mail->addReplyTo('wfnotification22@gmail.com');
            $mail->addAddress($data['email']);

            $mail->Subject = 'Clinic Appointment';
            $mail->Body = '<b> Hi Greetings! </b>'.$data['fullname']. '<br><b>Thank you for choosing Wellness First Naturopathic Clinic! </b>'. 
            '<b> Your Clinic Appointment has been approved! </b>'."<br>".
            '<b> Here are your appointment details: </b>'."<br>".
            '<b> Customer Name: </b>'.$data['fullname']."<br>". '<b> Email Address: </b>'
            .$data['email']. "<br>".'<b> Type of Concern: </b>'.$data['treatment_name']."<br>".
            '<b> Date and Time of Appointment: </b>'.$data['date']. "<br>";

            if($mail->send()){
            $_SESSION['email_sent'] = "Email Sent to " .$data['email'] . ". Patient has been Notified!";
                redirect('approved');
            }

        } else if($data['submit'] == 'Modified'){
            $data = $this->input->post();
            $mail = $this->phpmailer_lib->load();
            $mail->Clearaddresses();
            $mail->ClearAttachments();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "wfnotification22@gmail.com";
            $mail->Password = '06150318@#$wellness';
            $mail->Port = 465; //587
            $mail->SMTPSecure = "ssl"; //tls

            $mail->isHTML(true);
            $mail->setFrom('wfnotification22@gmail.com');
            $mail->addReplyTo('wfnotification22@gmail.com');
            $mail->addAddress($data['email']);

            $mail->Subject = 'Clinic Appointment';
            $mail->Body = '<b> Hi Greetings! </b>'.$data['fullname']. '<b><br>Thank you for choosing Wellness First Naturopathic Clinic! </b>'. 
            '<b> You have requested for a rescheduling of your appointment </b>'."<br>".
            '<b> Here are your appointment details: </b>'."<br>".
            '<b> Customer Name: </b>'.$data['fullname']."<br>". '<b> Email Address: </b>'
            .$data['email']. "<br>".'<b> Type of Concern: </b>'.$data['treatment_name']."<br>".
            '<b> Date and Time of Appointment: </b>'.$data['date']. "<br>";

            if($mail->send()){
                $_SESSION['email_sent_mod'] = "Email Sent to " .$data['email'] . ". Patient has been Notified!";
                    redirect('appointment');
                }
        } else {
            $mail = $this->phpmailer_lib->load();
            $mail->Clearaddresses();
            $mail->ClearAttachments();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "wfnotification22@gmail.com";
            $mail->Password = '06150318@#$wellness';
            $mail->Port = 465; //587
            $mail->SMTPSecure = "ssl"; //tls

            $mail->isHTML(true);
            $mail->setFrom('wfnotification22@gmail.com');
            $mail->addReplyTo('wfnotification22@gmail.com');
            $mail->addAddress($data['email']);

            $mail->Subject = 'Clinic Appointment';
            $mail->Body = '<b> Hi Greetings! </b>'.$data['fullname']. '<br><b>Thank you for choosing Wellness First Naturopathic Clinic! </b>'. 
            '<b> Unfortunately your Clinic Appointment has been declined </b>'."<br>".
            '<b> Customer Name: </b>'.$data['fullname']."<br>". '<b> Email Address: </b>'
            .$data['email']. "<br>".'<b> Type of Concern: </b>'.$data['treatment_name']."<br>".
            'If you wish to reschedule your appointment, kindly reply to this email with the date and time and we will notify with regards to the approval'."<br>".
            'Thank you for your understanding!';

            if($mail->send()){
                $_SESSION['email_sent_mod'] = "Email Sent to " .$data['email'] . ". Patient has been Notified!";
                    redirect('appointment');
                }
        }
    }
    public function receipt_send(){
        $data = $this->input->post();

        //SMTP Settings
        $mail = $this->phpmailer_lib->load();
        $mail->Clearaddresses();
        $mail->ClearAttachments();
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "wfnotification22@gmail.com";
        $mail->Password = '06150318@#$wellness';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls
        
        $mail->isHTML(true);
        $mail->setFrom('wfnotification22@gmail.com');
        $mail->addReplyTo('wfnotification22@gmail.com');
        $mail->addAddress($data['recipient_email']);

        $mail->Subject = "Clinic Receipt";
        $mail->Body = "
        Your Clinic Appointment Receipt

        Billed to: ". $data['recipient_name']. "
        Patient Name: " .$data['patient_name']. "
        Patient Email Address: ".$data['patient_email']. "
        Concern: " .$data['treatment_name'] ."
        Treatment Cost: ". $data['treatment_cost'] ."
        Payment method: Onhand";

        if($mail->send()){
           $_SESSION['email_receipt'] = "Receipt Sent to " .$data['recipient_email'] . ". Patient has been Notified!";
            redirect('receipt');
        }
    }
}
        

