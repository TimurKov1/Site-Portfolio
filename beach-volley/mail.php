<?php
    $check_in_month = $_POST['select_1'];
    $check_in_number = $_POST['select_1_number'];
    $check_out_month = $_POST['select_2'];
    $check_out_number = $_POST['select_2_number'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $name = ['name'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $message = 'Месяц: ' . $check_in_month . "\n" . 'Число: ' . $check_in_number . "\n" . 'Месяц: ' . $check_out_month . "\n" . 'Число: ' . $check_out_number . "\n" . 'Комнаты: ' . $rooms . "\n" . 'Взрослые: ' . $adults . "\n" . 'Дети: ' . $children . "\n" . 'Имя: ' . $name . "\n" . 'WhatsApp: ' . $whatsapp . "\n" . 'E-mail: ' . $email . "\n";
    if (mail('bvroyalclub@gmail.com', 'Заявка', $message)) {
        echo 'OK';
    }

    else {
        echo 'Error!';
    }
?>