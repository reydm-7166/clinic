<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['treatment_name']) && isset($_POST['date'])) {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['treatment_name'];
        $date = $_POST['date'];
        
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "wfnotification22@gmail.com";
        $mail->Password = '06150318@#$wellness';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email);

        $mail->Subject = "Clinic Appointment";
        $mail->Body = '<b> Your Clinic Appointment has been approved </b>'."<br>".'<b> Name: </b>'.$name."<br>". 
                        '<b> Email Address: </b>'.$email. "<br>". '<b> Concern: </b>'.$subject . "<br>". '<b> Date and Time: </b>'. $date;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>