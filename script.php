<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'config.php';

/**
 * @throws Exception
 */
function sendMail($email, $subject, $message): bool
{

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPAuth = true;
    if (IS_DEBUG) {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    } else {
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
    }
    $mail->SMTPSecure = "tls";

    $mail->Port = MAIL_PORT;
    $mail->Host = MAIL_HOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;

    try {
        $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
        $mail->addAddress($email);
        $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);
        $mail->isHTML();
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = strip_tags($message);
        $mail->CharSet = "utf-8";
        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    } catch (Exception $e) {
        throw new Exception($e->getMessage());
    }
}

function createMessageToUser($name, $email, $message, $phone): string {

    return "
        <html lang='ru'>
            <head>
                <title>Вы оставили заявку</title>
            </head>
            <body>
                <h1>Вы оставили заявку</h1>
                <p>Здравствуйте, $name!<br>Вы оставили заявку на портале " . SITE_URL . " для консультации с адвокатом <b>" . SITE_OWNER . "</b></p>
                <h2>Текст обращения:</h2>
                <p>$message</p>
                <p></p>
                <h3>Вы указали следующие контакты:</h3>
                <a href='mailto:$email'>$email</a>
                <p></p>
                <a href='tel:$phone'>$phone</a>
                <p></p>
                <p>Спасибо за обращение! Вам ответят в ближайшее время.</p>"
        . getSign() . "
            </body>
        </html>
    ";
}

function getSign(): string {
    return "<p>С уважением, администрация <a href='" . SITE_URL . "'>" . SITE_URL . "</a></p>";
}

function createMessageToOwner($name, $email, $message, $phone): string {

    return "
        <html lang='ru'>
            <head>
                <title>Вам было отправлено обращение</title>
            </head>
            <body>
                <h1>Новое обращение</h1>
                <p>Здравствуйте!<br>Вам было отправлено письмо от:<br><b>$name</b></p>
                <h2>Текст обращения:</h2>
                <p>$message</p>
                <p></p>
                <h3>Автором были указаны следующие контакты:</h3>
                <a href='mailto:$email'>$email</a>
                <p></p>
                <a href='tel:$phone'>$phone</a>
                <p></p>
                " . getSign() . "
            </body>
        </html>
    ";
}

function sendMailTransactional($email, $name, $message, $phone): string {
    $isSentToOwner = false;
    try {
        $isSentToOwner = sendMail(
            SITE_OWNER_EMAIL, "Вам было отправлено обращение",
            createMessageToOwner($name, $email, $message, $phone)
        );
        sendMail(
            $email, "Вами было отправлено обращение",
            createMessageToUser($name, $email, $message, $phone)
        );
        if ($isSentToOwner) {
            return "success";
        } else {
            return "error";
        }
    } catch (Exception $e) {
        if ($isSentToOwner) {
            return "success";
        }
        return "error";
    }
}