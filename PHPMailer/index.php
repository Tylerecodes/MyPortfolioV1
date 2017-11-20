<?php
    $msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer.php";
	include_once "Exception.php";

	if (isset($_POST['submit'])) {
		$subject = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

        $mail = new PHPMailer();
		$mail->addAddress('tyler@tylerecodes.com');
		$mail->setFrom($email);
		$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body = $message;

        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
	}
?>