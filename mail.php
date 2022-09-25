<?php
$to = 'timur1711kovalev@yandex.ru';
$subject = $_POST['username'];
$message = 'Телефон/E-mail: ' . $_POST['phone'] . "\r\n" . 'Сообщение: ' . $_POST['message'];
$headers = 'Content-type: text/html; charset=utf-8';
if (mail($to, $subject, $message, $headers)) {
    echo 'Ваше сообщение было отправлено!';
}
else {
    echo 'Упс:( Произошла ошибка, попробуйте еще раз';
}