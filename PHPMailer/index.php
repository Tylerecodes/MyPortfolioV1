<?php
    $msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";

	if (isset($_POST['submit'])) {
		$subject = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		//if we want to send via SMTP
       /*  $mail->Host = "smtp.gmail.com";
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "gte043@gmail.com";
        $mail->Password = "impress.chant.wanting";
        $mail->SMTPSecure = "ssl"; //TLS
        $mail->Port = 465; //587 */

		$mail->addAddress('tyler@tylerecodes.com');
		$mail->setFrom($email);
		$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body = $message;

		if ($mail->send())
		    $msg = "Your email has been sent, thank you!";
		else
		    $msg = "Please try again!";

		unlink($file);
	}
?>