<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['firstname'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    #setup smtp username and password
    $sender_username = "info@cloudcentsph.net";
    $sender_password =  "mlrx ceiw xkps kdfd";

    require get_template_directory() . '/vendor/autoload.php';

    $body = '<html>
			 <body>
			 <p>Name : ' . $firstname . ' ' . $lastname . '</p>
			 <p>Email : ' . $email . '</p>
			 <p>Mobile # : ' . $phone . '</p>
			 <p>Message : ' . $message . '</p>
			 </body>
			 </html>
			';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = $sender_username;
    $mail->Password = $sender_password;
    $mail->setFrom($sender_username, $firstname ." ". $lastname);
    $mail->addAddress($sender_username, 'Contact Us');
    if ($mail->addReplyTo($email)) {
        $mail->Subject = "Contact Us";
        $mail->MsgHTML($body);

        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
}