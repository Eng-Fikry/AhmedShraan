<?php
$to = "mohamedfekry270@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: " . $_POST['email'] . "\r\n" .
           "Reply-To: " . $_POST['email'] . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "تم إرسال البريد بنجاح";
} else {
    echo "فشل في إرسال البريد";
}
?>
