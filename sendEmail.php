<?php
    require '/usr/share/php/libphp-phpmailer/autoload.php';    
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $phone = $_POST['phone'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "innertechbrookvale@gmail.com"; //enter you email address
        $mail->Password = 'PHPMailerTechemy'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("koby@techemy.com.au"); //enter you email address
        $mail->Subject = ("$subject");
        
        
        $html = "Name: <b>$name</b><br>";
        
        
        $html .= "Email: $email <br>";
        
        
        
        if(!empty($phone)){
          $html .= "Phone: $phone <br>";
        }
        
        
        if(!empty($body)){
          $html .= "Body: ".nl2br($body);
        }

        $html .= "<hr>Email sent ". date("F j, Y, g:i a");


        
        
        $mail->Body = $html;

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
