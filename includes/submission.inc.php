<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

if(empty())

if(!empty($_POST)){
  $name = $_POST['name'];
  $preferredName = $_POST['preferredName'];
  $pronouns = $_POST['pronouns'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $socials = $_POST['socials'];
  $radioY = $_POST['radio-yes'];
  $radioN = $_POST['radio-no'];
  $story = $_POST['story'];

  if($radioY == 1){
    $social_tag = $preferredName.' wishes to be tagged on social media when the episode comes out ';
  } else if ($radioN == 1){
    $social_tag = $preferredName.' does not wish to be tagged on social media when the episode comes out ';
  } else {
    $social_tag = ' program is unsure whether user wants to be tagged in socials. ';
  }

  //Create an instance; passing `true` enables exceptions
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                                              //Enable verbose debug output
    $mail->isSMTP();                                                   //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                              //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                          //Enable SMTP authentication
    $mail->Username   = 'mike@msl.dev';                                //SMTP username
    $mail->Password   = 'FBB$2$XSn%L7b7DAVGm8dSwLQhYX$F_N';            //SMTP password
    $mail->SMTPSecure = 'ssl';                                        //Enable implicit TLS encryption
    $mail->Port       = 465;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mike@msl.dev', 'Michael Lewis');
    $mail->addAddress('conjuringconversations@gmail.com');     //Add a recipient
  //  $mail->addCC('cc@example.com');
    $mail->addBCC('mikesperlig@gmail.com');

    //Attachments
    //    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New submission from';
    $mail->Body    =  'New submission: <br>'.
                      'Name = '.$name.'<br>'.
                      'Perferred Name = '.$preferredName.'<br>'.
                      'Pronouns = '.$pronouns.'<br>'.
                      'Age = '.$age.'<br>'.
                      'Email = '.$email.'<br>'.
                      'Phone # = '.$phoneNumber.'<br>'.
                      'socials = '.$socials.'<br>'.
                      $social_tag;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
