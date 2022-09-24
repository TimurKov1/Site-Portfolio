<?php
    $to = 'timur1711@icloud.com';
    $token = '5281698565:AAGOYypQI67CcWLLITiO9rhvo1MIrhDvmVI';
    $chatid = '-708382382';
    $bot_url = "https://api.telegram.org/bot{$token}/";
    $subject = 'Заявка';
    $message = 'Марка: ' . $_POST['step1'] . "\n";
    $message .= 'Сколько лет: ' . $_POST['step2'] . "\n";
    $message .= 'Неисправность: ' . $_POST['step3'] . "\n";
    $message .= 'Осуществлялся ли ремонт: ' . $_POST['step4'] . "\n";
    $message .= 'Когда нужен ремонт: ' . $_POST['step5'] . "\n";
    $message .= 'Место нахождения: ' . $_POST['step6'] . "\n";
    $message .= 'Бонус: ' . $_POST['step7'] . "\n";
    $message .= 'Телефон:' . $_POST['phone'] . "\n";
    $message2 = '<b>' . $subject . '</b>';
    $message2 = '<b>Марка:</b> ' . $_POST['step1'] . "%0A";
    $message2 .= '<b>Сколько лет:</b> ' . $_POST['step2'] . "%0A";
    $message2 .= '<b>Неисправность:</b> ' . $_POST['step3'] . "%0A";
    $message2 .= '<b>Осуществлялся ли ремонт:</b> ' . $_POST['step4'] . "%0A";
    $message2 .= '<b>Когда нужен ремонт:</b> ' . $_POST['step5'] . "%0A";
    $message2 .= '<b>Место нахождения:</b> ' . $_POST['step6'] . "%0A";
    $message2 .= '<b>Бонус:</b> ' . $_POST['step7'] . "%0A";
    $message2 .= '<b>Телефон:</b> ' . $_POST['phone'] . "%0A";
    $headers = "From: Электрик \r\n";
    $headers.= "MIME-Version: 1.0\r\n";
    $headers.= "Content-Type: text/plain; "."\r\n\r\n";
    $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$message2}");
    if(mail($to, $subject, $message, $headers)) {
        echo 'OK';
    }
    else {
        echo 'Error';
    }
?>