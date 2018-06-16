<?php 
namespace App\classes\User\MailerManager;

    Class MailerManager{
    	public function sendMail($clientMail,$clientName,$message){
    		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
				try {
				    //Server settings
				    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
				    $mail->isSMTP();                                      // Set mailer to use SMTP
				    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
				    $mail->SMTPAuth = true;                               // Enable SMTP authentication
				    $mail->Username = "logovimike@gmail.com";                 // SMTP username
				    $mail->Password = "Mugiwara2";                           // SMTP password
				    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
				    $mail->Port =  465;                                    // TCP port to connect to

				    //Recipients
				    $mail->setFrom('logovimike@gmail.com', 'BLUEBEARD');
				    $mail->addAddress($clientMail, $clientName);     // Add a recipient
				   // $mail->addAddress('ellen@example.com');               // Name is optional
				   // $mail->addReplyTo('logovimike@gmail.com', 'BLUEBEARD');
				    //$mail->addCC($clientMail);
				    //$mail->addBCC('bcc@example.com');

				    //Attachments
				    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

				    //Content
				    $mail->isHTML(true);                                  // Set email format to HTML
				    $mail->Subject = 'BLUEBEARD-ACTIVATION DE COMPTE';
				    $mail->Body    = $message;
				    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				    if($mail->send()){
				    	return true;
				    }
				    
				} catch (Exception $e) {
				    return false;
				     }
  }
 }