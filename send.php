<?php
    $to = 'busforward@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = $_POST['form-subject'];
    $message = '
    <html>
        <head>
            <title>' . $subject . '</title>
        </head>
        <body>
            <h2>Заявка с формы: ' . $subject . '</h2>
            <p>Контактное лицо: ' . $_POST['user-name'] . '</p>
            <p>E-mail: ' . $_POST['user-email'] . '</p>
            <p>Телефон: ' . $_POST['user-phone'] . '</p>
            <p>Сообщение: ' . $_POST['user-message'] . '</p>
        </body>
    </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Frontendie <info@frontendie.ru/>\r\n"; //Наименование и почта отправителя
    if (mail($to, $subject, $message, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
?>
