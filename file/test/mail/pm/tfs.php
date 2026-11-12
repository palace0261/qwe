<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'pmm/src/Exception.php';
require 'pmm/src/PHPMailer.php';
require 'pmm/src/SMTP.php';


// ex) mailer("kOO", "zzxp@naver.com", "zzxp@naver.com", "제목 테스트", "내용 테스트", 1);
//function mailer($fname, $fmail, $to, $subject, $content, $type=0, $file="", $cc="", $bcc="")



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    
    $ext = PHPMailer::mb_pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
    
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'])) . '.' . $ext;


    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->CharSet    = "utf-8"; // korean
    $mail->ContentType   = "text/html"; // text
    $mail->Host = 'smtp.naver.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jieunha8099';                 // SMTP username
    $mail->Password = 'Giang2378@';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('jieunha8099@naver.com');
    $mail->addAddress($_POST['mail']);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['text'];

   if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        //Upload handled successfully
        //Now create a message

        //Attach the uploaded file
        if (!$mail->addAttachment($uploadfile, $_FILES['userfile']['name'])) {
            //If we can't attach the file, we should delete it
            $msg .= 'Failed to attach file ' . $_FILES['userfile']['name'];
        }

   }

if ($mail->send()) {
    echo '메일이 성공적으로 전송되었습니다.';
} else {
    echo '메일 전송에 실패했습니다.';
}
    
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>