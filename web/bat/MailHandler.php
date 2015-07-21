<?php

	if(isset($_POST['name']) and $_POST['name'] != ''){$message_body .= '<strong>Visitante:</strong> ' . $_POST['name'] . "\n" . '<br>' . "\n"; $subject.=$_POST['name'];}
	if(isset($_POST['email']) and $_POST['email'] != ''){$message_body .= '<strong>E-mail:</strong> ' . $_POST['email'] . "\n" . '<br>' . "\n"; $user_email=$_POST['email'];}
	if(isset($_POST['state']) and $_POST['state'] != ''){$message_body .= '<strong>Estado:</strong> ' . $_POST['state'] . "\n" . '<br>' . "\n";}
	if(isset($_POST['phone']) and $_POST['phone'] != ''){$message_body .= '<strong>Telefone:</strong> ' . $_POST['phone'] . "\n" . '<br>' . "\n";}
	if(isset($_POST['fax']) and $_POST['fax'] != ''){$message_body .= '<strong>Fax:</strong> ' . $_POST['fax'] . "\n" . '<br>' . "\n";}
	if(isset($_POST['message']) and $_POST['message'] != ''){$message_body .= '<strong>Mensagem:</strong> ' . $_POST['message'] . "\n";}
	//if(isset($_POST['stripHTML']) and $_POST['stripHTML']=='true'){$message_body = strip_tags($message_body);$message_type='text';}

    try {
        $account="faleconosco@mejer.com.br";
        $password="ka@12@cz";
        $to="faleconosco@mejer.com.br";
        $from="faleconosco@mejer.com.br";
        $from_name="WebSite";
        $subject="Contato";

        include "phpmailer/class.phpmailer.php";
        //require_once('phpmailer/class.pop3.php');
        //$pop = new POP3();
        //$pop->Authorise('pop3.mejer.com.br', 110, 30, 'faleconosco@mejer.com.br', 'ka@12@cz', 1);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = "smtp.mejer.com.br";
        $mail->SMTPAuth= true;
        $mail->Port = 587;
        $mail->Username= $account;
        $mail->Password= $password;
        //$mail->SMTPSecure = 'tls';
        $mail->From = $from;
        $mail->FromName= $from_name;
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message_body;
        $mail->addAddress($to);

        if(!$mail->Send()){
            die( "Erro: " . $mail->ErrorInfo);
        }else{
            die('success');
        }

    } catch(Exception $mail) {
        die($mail);
    }
?>