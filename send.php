<?php
if(isset($_POST['email']) && isset($_POST['message'])) {
    $to = "your_email@example.com"; // Замените на вашу электронную почту
    $subject = "Новое сообщение с сайта";
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $email";
    
    // Отправка письма
    mail($to, $subject, $message, $headers);
    
    echo "Письмо успешно отправлено!";
}
?>