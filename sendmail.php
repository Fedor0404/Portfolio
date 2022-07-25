<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

$request = json_decode(file_get_contents('php://input'));
$name = $request->name;
$email = $request->email;
$text = $request->text;

// $name = $_POST['name'];

$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name <br>
<b>Email:</b> $email <br>
<b>Сообщение:</b> $text <br>
";

$mail = new PHPMailer(true);

 
try {
    // Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'smtp.mail.ru';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'kormachew@mail.ru';                     //SMTP username
    // $mail->Password   = 'gZauqsFmJ6dCaeSyrfA9';                               //SMTP password
    // $mail->SMTPSecure = SSL;            //Enable implicit TLS encryption
    // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "SSL";
    $mail->Host = 'smtp.masterhost.ru';
    $mail->Port = 2525;

    $mail -> CharSet = 'UTF-8';

    
    $mail->Username = 'support@clean-control.ru';
    
    $mail->Password = 'SamsungCjybRk.x0404';




    //Recipients
    $mail->setFrom('support@clean-control.ru', 'Kormachev Fedor');
    $mail->AddAddress('kormachew@mail.ru');
    $mail->addReplyTo('kormachew@mail.ru', 'Kormachev Fedor');
    //Attachments


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Письмо с сайта портфолио';
    $mail->Body = $body;  
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//     if(!$mail->send())

// {

// echo "Ошибка: " . $mail->ErrorInfo;

// }

// else

// {

// echo "Сообщение успешно отправлено";

// }

// $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

// $mail->Send();
// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
//     print_r(error_get_last())
//     } else {
//     echo 'Message has been sent';
//     }

    
// echo "Message Sent OK\n";
// } catch (phpmailerException $e) {
// echo $e->errorMessage(); //Pretty error messages from PHPMailer
// } catch (Exception $e) {
// echo $e->getMessage(); //Boring error messages from anything else!
// }





